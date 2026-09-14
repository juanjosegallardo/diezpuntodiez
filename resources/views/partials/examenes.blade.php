@php
    // Completa nombre y link de cada examen; duplica una entrada para agregar más.
    $examenes = [
        ['nombre' => '', 'link' => ''],
        ['nombre' => '', 'link' => ''],
        ['nombre' => '', 'link' => ''],
    ];
@endphp

<section class="exams-section container" id="examenes" tabindex="-1" aria-labelledby="examenes-title">
    <div class="exams-heading">
        <div>
            <p class="section-eyebrow">Evaluaciones del plantel</p>
            <h2 id="examenes-title">Exámenes</h2>
            <p>Entra a la evaluación que indique tu docente.</p>
        </div>
        <span class="exams-priority">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m12 3 8 4v5c0 5-8 9-8 9s-8-4-8-9V7l8-4Z"/><path d="M12 8v5m0 3h.01"/></svg>
            Importante
        </span>
    </div>

    <div class="exams-grid">
        @foreach ($examenes as $examen)
            @php
                $nombreExamen = trim((string) ($examen['nombre'] ?? ''));
                $enlaceExamen = trim((string) ($examen['link'] ?? ''));
                $examenDisponible = $nombreExamen !== ''
                    && filter_var($enlaceExamen, FILTER_VALIDATE_URL) !== false
                    && in_array(strtolower((string) parse_url($enlaceExamen, PHP_URL_SCHEME)), ['http', 'https'], true);
            @endphp

            @if ($examenDisponible)
                <a class="exam-card" href="{{ $enlaceExamen }}" target="_blank" rel="noopener noreferrer">
            @else
                <article class="exam-card exam-card--pending">
            @endif
                    <span class="exam-card__index" aria-hidden="true">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="exam-card__status">{{ $examenDisponible ? 'Disponible' : 'Por publicar' }}</span>
                    <h3 class="exam-card__title">{{ $nombreExamen !== '' ? $nombreExamen : 'Examen por publicar' }}</h3>
                    <span class="exam-card__action">
                        {{ $examenDisponible ? 'Entrar al examen' : 'Enlace pendiente' }}
                        @if ($examenDisponible)
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg>
                            <span class="sr-only">Abre en otra pestaña</span>
                        @else
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                        @endif
                    </span>
            @if ($examenDisponible)
                </a>
            @else
                </article>
            @endif
        @endforeach
    </div>
</section>
