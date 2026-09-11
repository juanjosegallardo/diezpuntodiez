const test = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const vm = require('node:vm');
const path = require('node:path');
const source = fs.readFileSync(path.join(__dirname, '../../public/js/agenda.js'), 'utf8');

class Element {
    constructor(tag = 'div') { this.tag = tag; this.children = []; this.dataset = {}; this.attributes = {}; this.listeners = {}; this.value = ''; }
    set textContent(value) { this.value = String(value); this.children = []; }
    get textContent() { return this.value + this.children.map(child => child.textContent).join(''); }
    set innerHTML(_) { throw new Error('Activity data must be rendered as text'); }
    setAttribute(name, value) { this.attributes[name] = value; }
    addEventListener(event, listener) { this.listeners[event] = listener; }
    append(...nodes) { this.children.push(...nodes.flatMap(node => node.tag === 'fragment' ? node.children : [node])); }
    replaceChildren(...nodes) { this.children = []; this.value = ''; this.append(...nodes); }
}

const activity = (id, state, name = 'Examen') => ({ id, estado: state, actividad: name, profesor: 'Docente de prueba', hora_entrada: '08:40', duracion: 50 });
const payload = activities => ({ fecha: '2026-09-10', zona_horaria: 'America/Mexico_City', actualizado_en: '2026-09-10T08:00:00-06:00', actividades: activities });
const settle = () => new Promise(resolve => setImmediate(resolve));

async function mount(initial) {
    const controls = {};
    for (const key of ['list', 'status', 'date', 'updated', 'refresh']) controls[key] = new Element();
    const filters = ['proximas', 'todas'].map(value => { const element = new Element('button'); element.dataset.agendaFilter = value; return element; });
    const panel = { dataset: { endpoint: '/api/agenda' }, querySelector: selector => controls[selector.replace('[data-agenda-', '').replace(']', '')], querySelectorAll: () => filters };
    let reply = initial;
    const context = {
        document: { hidden: false, querySelectorAll: () => [panel], createElement: tag => new Element(tag), createDocumentFragment: () => new Element('fragment'), addEventListener: () => {} },
        AbortController, setTimeout, clearTimeout, setInterval: () => {},
        fetch: async () => { if (reply instanceof Error) throw reply; return { ok: true, json: async () => reply }; },
    };
    vm.runInNewContext(source, context);
    await settle();
    return { controls, filters, reload: async next => { reply = next; await controls.refresh.listeners.click(); } };
}

test('upcoming includes current and next activities, while all-day restores completed ones', async () => {
    const app = await mount(payload([activity(1, 'finalizada'), activity(2, 'en_curso'), activity(3, 'proxima')]));
    assert.equal(app.controls.list.children.length, 2);
    assert.match(app.controls.list.textContent, /En curso/);
    assert.match(app.controls.list.textContent, /Siguiente/);
    assert.match(app.controls.list.textContent, /ProfesorDocente de pruebaHora de entrada08:40Duración50 min/);
    app.filters[1].listeners.click();
    assert.equal(app.controls.list.children.length, 3);
    assert.equal(app.filters[1].attributes['aria-pressed'], 'true');
    app.filters[0].listeners.click();
    assert.equal(app.controls.list.children.length, 2);
});

test('empty day, finished day, connection failure and retry have distinct messages', async () => {
    const app = await mount(payload([]));
    assert.match(app.controls.status.textContent, /No hay actividades programadas/);
    await app.reload(payload([activity(1, 'finalizada')]));
    assert.match(app.controls.status.textContent, /ya terminaron/);
    await app.reload(new Error('Offline'));
    assert.match(app.controls.status.textContent, /No pudimos cargar/);
    assert.equal(app.controls.list.children.length, 0);
    assert.equal(app.controls.refresh.disabled, false);
    await app.reload(payload([activity(2, 'proxima')]));
    assert.equal(app.controls.list.children.length, 1);
    assert.equal(app.controls.list.attributes['aria-busy'], 'false');
});

test('activity text is not interpreted as HTML and unconfirmed durations are labeled', async () => {
    const entry = { ...activity(1, 'sin_duracion', '<img src=x onerror=alert(1)>'), profesor: null, duracion: null };
    const app = await mount(payload([entry]));
    assert.match(app.controls.list.textContent, /<img src=x onerror=alert\(1\)>/);
    assert.match(app.controls.list.textContent, /Por confirmar/);
    assert.doesNotMatch(app.controls.list.textContent, /En curso/);
});
