(() => {
    'use strict';

    document.querySelectorAll('[data-agenda]').forEach(panel => {
        const list = panel.querySelector('[data-agenda-list]');
        const status = panel.querySelector('[data-agenda-status]');
        const date = panel.querySelector('[data-agenda-date]');
        const updated = panel.querySelector('[data-agenda-updated]');
        const refresh = panel.querySelector('[data-agenda-refresh]');
        const filters = [...panel.querySelectorAll('[data-agenda-filter]')];
        let selected = 'proximas';
        let payload = null;
        let busy = false;

        const text = (tag, className, value) => {
            const element = document.createElement(tag);
            element.className = className;
            element.textContent = value;
            return element;
        };

        function render() {
            if (!payload) return;
            const entries = payload.actividades.filter(item => selected === 'todas' || item.estado !== 'finalizada');
            const next = payload.actividades.find(item => item.estado === 'proxima');
            const fragment = document.createDocumentFragment();
            entries.forEach(item => {
                const card = text('li', 'agenda__item', '');
                card.dataset.state = item.estado;
                const states = { en_curso: 'En curso', finalizada: 'Finalizada', sin_duracion: 'Duración por confirmar', proxima: item.id === next?.id ? 'Siguiente' : 'Por comenzar' };
                card.append(text('span', 'agenda__badge', states[item.estado] || 'Programada'));
                card.append(text('h3', '', item.actividad || 'Actividad por confirmar'));
                const details = text('dl', 'agenda__details', '');
                [['Profesor', item.profesor || 'Por confirmar'], ['Hora de entrada', item.hora_entrada], ['Duración', item.duracion ? `${item.duracion} min` : 'Por confirmar']].forEach(([label, value]) => {
                    const pair = document.createElement('div');
                    pair.append(text('dt', '', label));
                    const description = text('dd', '', label === 'Hora de entrada' ? '' : value);
                    if (label === 'Hora de entrada') {
                        const time = text('time', '', value);
                        time.dateTime = value;
                        description.append(time);
                    }
                    pair.append(description);
                    details.append(pair);
                });
                card.append(details);
                fragment.append(card);
            });
            list.replaceChildren(fragment);
            status.textContent = !payload.actividades.length
                ? 'No hay actividades programadas para hoy.'
                : !entries.length
                    ? 'Las actividades de hoy ya terminaron. Consulta «Todo el día» para verlas.'
                    : `${entries.length} ${entries.length === 1 ? 'actividad' : 'actividades'} ${selected === 'todas' ? 'en el día' : 'en curso o por comenzar'}.`;
        }

        async function load() {
            if (busy) return;
            busy = true;
            refresh.disabled = true;
            list.setAttribute('aria-busy', 'true');
            if (!payload) status.textContent = 'Cargando actividades del día…';
            const controller = new AbortController();
            const timeout = setTimeout(() => controller.abort(), 10000);
            try {
                const response = await fetch(panel.dataset.endpoint, {
                    headers: { Accept: 'application/json' },
                    credentials: 'same-origin',
                    cache: 'no-store',
                    signal: controller.signal,
                });
                if (!response.ok) throw new Error('Agenda unavailable');
                const data = await response.json();
                if (!Array.isArray(data.actividades) || !/^\d{4}-\d{2}-\d{2}$/.test(data.fecha)) throw new Error('Invalid agenda');
                const receivedAt = new Date(data.actualizado_en);
                if (!Number.isFinite(receivedAt.getTime())) throw new Error('Invalid agenda time');
                const options = { timeZone: data.zona_horaria };
                date.dateTime = data.fecha;
                date.textContent = new Intl.DateTimeFormat('es-MX', { ...options, weekday: 'long', day: 'numeric', month: 'long' }).format(receivedAt);
                updated.textContent = `Actualizado ${new Intl.DateTimeFormat('es-MX', { ...options, hour: '2-digit', minute: '2-digit', hourCycle: 'h23' }).format(receivedAt)}`;
                payload = data;
                render();
            } catch {
                payload = null;
                list.replaceChildren();
                status.textContent = 'No pudimos cargar la agenda. Intenta actualizar en un momento.';
                updated.textContent = 'Agenda sin conexión.';
            } finally {
                clearTimeout(timeout);
                busy = false;
                refresh.disabled = false;
                list.setAttribute('aria-busy', 'false');
            }
        }

        filters.forEach(button => button.addEventListener('click', () => {
            selected = button.dataset.agendaFilter;
            filters.forEach(filter => filter.setAttribute('aria-pressed', String(filter === button)));
            render();
        }));
        refresh.addEventListener('click', load);
        document.addEventListener('visibilitychange', () => { if (!document.hidden) load(); });
        setInterval(() => { if (!document.hidden) load(); }, 60000);
        load();
    });
})();
