<section class="notice-panel agenda" data-agenda data-endpoint="{{ url('/api/agenda') }}" aria-labelledby="agenda-title">
    <div class="notice-panel__head">
        <div class="notice-panel__heading">
            <span class="agenda__heading-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18M8 15h2m4 0h2"/></svg></span>
            <h2 id="agenda-title">Próximas actividades</h2>
        </div>
        <p>El día en el Centro de Cómputo</p>
        <time class="agenda__date" data-agenda-date></time>
    </div>
    <div class="agenda__filters" role="group" aria-label="Ver actividades del día">
        <button type="button" data-agenda-filter="proximas" aria-pressed="true" aria-controls="agenda-list"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Próximas</span></button>
        <button type="button" data-agenda-filter="todas" aria-pressed="false" aria-controls="agenda-list"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18m-13 4h2m4 0h2"/></svg><span>Todo el día</span></button>
    </div>
    <p class="agenda__status" data-agenda-status role="status" aria-live="polite" aria-atomic="true">Cargando actividades del día…</p>
    <ol class="agenda__list" id="agenda-list" data-agenda-list aria-label="Actividades por hora de entrada" aria-busy="true"></ol>
    <div class="agenda__footer">
        <span data-agenda-updated>Se actualiza cada minuto.</span>
        <button type="button" class="agenda__refresh" data-agenda-refresh><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 7v5h-5M4 17v-5h5"/><path d="M6 7a7 7 0 0 1 11.6-1L20 9M4 15l2.4 3A7 7 0 0 0 18 17"/></svg><span>Actualizar</span></button>
    </div>
    <noscript><p class="agenda__status">Activa JavaScript para consultar las actividades programadas.</p></noscript>
</section>
