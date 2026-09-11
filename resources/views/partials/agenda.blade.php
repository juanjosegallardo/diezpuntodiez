<section class="notice-panel agenda" data-agenda data-endpoint="{{ url('/api/agenda') }}" aria-labelledby="agenda-title">
    <div class="notice-panel__head">
        <div class="notice-panel__heading">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18M8 15h2m4 0h2"/></svg>
            <h2 id="agenda-title">Próximas actividades</h2>
        </div>
        <p>El día en el Centro de Cómputo</p>
        <time class="agenda__date" data-agenda-date></time>
    </div>
    <div class="agenda__filters" role="group" aria-label="Ver actividades del día">
        <button type="button" data-agenda-filter="proximas" aria-pressed="true" aria-controls="agenda-list">Próximas</button>
        <button type="button" data-agenda-filter="todas" aria-pressed="false" aria-controls="agenda-list">Todo el día</button>
    </div>
    <p class="agenda__status" data-agenda-status role="status" aria-live="polite" aria-atomic="true">Cargando actividades del día…</p>
    <ol class="agenda__list" id="agenda-list" data-agenda-list aria-label="Actividades por hora de entrada" aria-busy="true"></ol>
    <div class="agenda__footer">
        <span data-agenda-updated>Se actualiza cada minuto.</span>
        <button type="button" class="agenda__refresh" data-agenda-refresh>Actualizar</button>
    </div>
    <noscript><p class="agenda__status">Activa JavaScript para consultar las actividades programadas.</p></noscript>
</section>
