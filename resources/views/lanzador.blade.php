@php
    $modoRespaldo = request()->query->has('planb');
    $totalActividades = count($actividades);
@endphp
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Accede a los exámenes disponibles de CECyTEG Plantel Pénjamo.">
    <meta name="color-scheme" content="light dark">
    <title>Exámenes disponibles · CECyTEG Pénjamo</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo_bola.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo_bola.png') }}">
    <script>
        try {
            document.documentElement.dataset.theme = localStorage.getItem('theme') === 'dark' ? 'dark' : 'light';
        } catch (_) {}
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lanzador.css') }}">
    <script src="{{ asset('js/lanzador.js') }}" defer></script>
</head>
<<<<<<< HEAD
<body>
    <a class="launcher-skip" href="#examenes">Ir a los exámenes</a>
    <header class="launcher-header">
        <div class="launcher-header__inner launcher-container">
            <a class="launcher-brand" href="{{ url('/') }}" aria-label="Ir al portal de CECyTEG">
                <img src="{{ asset('images/logo.png') }}" alt="CECyTEG Guanajuato" width="2837" height="854">
                <span>Plantel Pénjamo<small>Centro de Cómputo</small></span>
            </a>
            <div class="launcher-header__actions">
                <a class="launcher-back" href="{{ url('/') }}">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 5-7 7 7 7M5 12h14"/></svg>
                    <span>Volver al portal</span>
                </a>
                <button class="launcher-theme" id="launcherTheme" type="button" aria-label="Activar modo oscuro" aria-pressed="false" hidden>
                    <svg class="launcher-theme__sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M2 12h2m16 0h2M5 5l1.5 1.5m11 11L19 19M5 19l1.5-1.5m11-11L19 5"/></svg>
                    <svg class="launcher-theme__moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.9 13a9 9 0 0 1-9.9-9.9A9 9 0 1 0 20.9 13Z"/></svg>
                </button>
=======
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Formularios Activos</h1>



    
    <?php if(isset($_GET["planb"])):?>
    <div class="alert alert-warning text-center">
        <h2>PLAN B</h2>
        Si estas aquí es seguramente por que Mi Aula CECYTEG falló, no te preocupes aquí vas a poder realizar tu examen
    </div>
    <div class="alert alert-primary text-center">
        <i>“Tu puedes ser, <b>lo que quieras ser.</b>”</i>
    </div>
    <?php endif;?>

    <div class="alert alert-primary text-center">
        <i>“Si Chucky hizo todo eso sin pilas, imagínate lo que tú puedes lograr si sí <b>te pones las pilas.</b>”</i>
    </div>
    <div class="row">
    @foreach ($actividades as $actividad)

        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{  $actividad['nombre'] }}</h5>
                    <p class="card-text">
                        <strong>Grupo:</strong>{{  $actividad['grupo'] }} <br>
                        <strong>Inicio:</strong> {{  $actividad['fecha_entrada'] }}<br>
                    </p>
                    <a href="seb://10.10.10.10:8000/actividades/{{ $actividad["id"] }}/seb" class="btn btn-primary">
                        Abrir Examen Mi Aula
                    </a>

                    <!--<a href="seb://10.10.10.10:8000/actividades/{{ $actividad["id"] }}/seb?respaldo=true" class="btn btn-primary">
                        Abrir Examen Formularios
                    </a>-->


                    
    
                  
                   
                </div>
>>>>>>> 494a1d6f47ff9981157808d2196036fff7d33c0e
            </div>
        </div>
    </header>

    <main class="launcher-main launcher-container">
        <section class="launcher-intro" aria-labelledby="launcher-title">
            <div class="launcher-intro__copy">
                <p class="launcher-eyebrow"><span></span> Tu espacio de evaluación</p>
                <h1 id="launcher-title">Exámenes <span>disponibles.</span></h1>
                <p class="launcher-intro__text">Encuentra tu grupo y abre la evaluación que te indique tu docente.</p>
            </div>
            <div class="launcher-summary">
                <span class="launcher-summary__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V2h6v2M9 9h6M9 13h6m-6 4h3"/></svg>
                </span>
                <div><strong>{{ $totalActividades }}</strong><span>{{ $totalActividades === 1 ? 'examen disponible' : 'exámenes disponibles' }}</span></div>
            </div>
        </section>

        @if ($modoRespaldo)
            <aside class="launcher-backup" aria-labelledby="backup-title">
                <span class="launcher-backup__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 3 9 16H3L12 3Z"/><path d="M12 9v4m0 3h.01"/></svg></span>
                <div>
                    <p class="launcher-backup__label">Plan B · Acceso alternativo</p>
                    <h2 id="backup-title">Tu examen puede continuar.</h2>
                    <p>Si Mi Aula no está disponible, utiliza <strong>Abrir Formularios</strong> en tu evaluación.</p>
                </div>
            </aside>
        @endif

        <section class="launcher-exams" id="examenes" tabindex="-1" aria-label="Lista de exámenes disponibles">
            <div class="launcher-grid">
                @forelse ($actividades as $actividad)
                    <article class="launcher-card" aria-labelledby="examen-{{ $loop->index }}" style="--card-delay: {{ min($loop->index, 5) * 60 }}ms">
                        <div class="launcher-card__top">
                            <span class="launcher-group"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="7" r="3"/><path d="M3 20v-2a6 6 0 0 1 12 0v2M16 4a3 3 0 0 1 0 6m2 4a5 5 0 0 1 3 4v2"/></svg>Grupo {{ $actividad['grupo'] }}</span>
                            <span class="launcher-available"><span aria-hidden="true"></span>Disponible</span>
                        </div>
                        <h2 class="launcher-card__title" id="examen-{{ $loop->index }}">{{ $actividad['nombre'] }}</h2>
                        <div class="launcher-card__schedule">
                            <span class="launcher-card__calendar" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18m-11 4h3"/></svg></span>
                            <div><span>Fecha y hora de inicio</span><time datetime="{{ \Illuminate\Support\Carbon::parse($actividad['fecha_entrada'])->toIso8601String() }}">{{ \Illuminate\Support\Carbon::parse($actividad['fecha_entrada'])->format('d/m/Y · H:i') }}</time></div>
                        </div>
                        <div class="launcher-card__actions">
                            <a href="seb://10.10.10.10:8000/actividades/{{ $actividad['id'] }}/seb" class="launcher-action {{ $modoRespaldo ? 'launcher-action--secondary' : 'launcher-action--primary' }}" aria-describedby="launcher-app-help">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="m2 8 10-5 10 5-10 5-10-5ZM6 10v6c4 3 8 3 12 0v-6M22 8v7"/></svg>
                                <span>Abrir Mi Aula<span class="launcher-sr-only">: {{ $actividad['nombre'] }}, grupo {{ $actividad['grupo'] }}</span></span>
                                <svg class="launcher-action__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                            </a>
                            <a href="seb://10.10.10.10:8000/actividades/{{ $actividad['id'] }}/seb?respaldo=true" class="launcher-action {{ $modoRespaldo ? 'launcher-action--primary' : 'launcher-action--secondary' }}" aria-describedby="launcher-app-help">
                                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 8h6m-6 4h6m-6 4h3"/></svg>
                                <span>Abrir Formularios<span class="launcher-sr-only">: {{ $actividad['nombre'] }}, grupo {{ $actividad['grupo'] }}</span></span>
                                <svg class="launcher-action__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="launcher-empty">
                        <span class="launcher-empty__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18m-11 5h8"/></svg></span>
                        <h2>Aún no hay exámenes disponibles</h2>
                        <p>Aparecerán aquí cuando llegue su horario. Si ya es tu turno, consulta a tu docente.</p>
                        <a class="launcher-action launcher-action--primary" href="{{ url()->full() }}"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 7v5h-5M4 17v-5h5"/><path d="M6 7a7 7 0 0 1 12-1l2 3M4 15l2 3a7 7 0 0 0 12-1"/></svg>Actualizar exámenes</a>
                    </div>
                @endforelse
            </div>
        </section>

        <aside class="launcher-help" aria-label="Ayuda para abrir los exámenes">
            <span class="launcher-help__icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m12 3 8 4v5c0 5-8 9-8 9s-8-4-8-9V7l8-4Z"/><path d="m8 12 3 3 5-6"/></svg></span>
            <div>
                <p id="launcher-app-help">Los exámenes se abren con <strong>Safe Exam Browser.</strong></p>
                <p>Si la aplicación no inicia, solicita apoyo al Centro de Cómputo.</p>
            </div>
            <a href="mailto:juangallardo@cecyteg.edu.mx">Solicitar apoyo<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 7h10v10M7 17 17 7"/></svg></a>
        </aside>

        <blockquote class="launcher-quote">
            <span class="launcher-quote__mark" aria-hidden="true">“</span>
            <div class="launcher-quote__body">
                <p id="launcherQuoteText" aria-live="off">
                    @if ($modoRespaldo)
                        Tú puedes ser <strong>lo que quieras ser.</strong>
                    @else
                        Si Chucky hizo todo eso sin pilas, imagínate lo que tú puedes lograr si sí <strong>te pones las pilas.</strong>
                    @endif
                </p>
                <button class="launcher-quote__toggle" id="launcherQuoteToggle" type="button" aria-controls="launcherQuoteText" aria-pressed="false" hidden>
                    <svg class="launcher-quote__pause" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5v14M15 5v14"/></svg>
                    <svg class="launcher-quote__play" viewBox="0 0 24 24" aria-hidden="true"><path d="m8 5 11 7-11 7V5Z"/></svg>
                    <span>Pausar frases</span>
                </button>
            </div>
        </blockquote>
    </main>

    <footer class="launcher-footer launcher-container">
        <span><span class="launcher-footer__dot" aria-hidden="true"></span>CECyTEG · Plantel Pénjamo</span>
        <span>Centro de Cómputo</span>
    </footer>
</body>
</html>
