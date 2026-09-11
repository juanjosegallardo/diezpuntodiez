
@php($grupos=[
    "",
    2901,2902,2903,2904,2905,2906,
    3001,3002,3003,3004,3005,3006,
    3101,3102,3103,3104,3105,3106,
    "Varios"
])

@php($profesores=[
    "",
    "Angélica Gutiérrez Morales",
    "Blanca Rosa Troncoso Domínguez",
    "Cristina Guerrero Rodríguez",
    "David Zaragoza Torres",
    "Héctor Mejía Martínez",
    "Hortensia Espitia Rodríguez",
    "Jaime Hernández Calderón",
    "José Francisco González Alvarado",
    "José Luis Luévanos Barragán",
    "Juan José Gallardo Mendoza",
    "Julia Elena Núñez Soto",
    "Norberto Zavala García",
    "Octavio Ramírez Medel",
    "Reynaldo Negrete Soto",
    "Roberto Baltazar Vázquez",
    "Salvador Cabrera Vázquez",
    "Víctor Manuel Zapién Piceno",
    "Jhony Walther Salinas Montejano",
    "Fátima Livier Rodríguez Guerrero",
    "Yadira Madrigal Rosales"
])

@php($asignaturas=[
    "",
    "Administrativa",
    "Cultura digital I",
    "Clasifica los elementos básicos de una red LAN",
    "Diseña la red LAN",
    "Emplea frameworks para el desarrollo de software",
    "Aplica metodologías ágiles para el desarrollo de software"
])

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de actividades · CECyTEG</title>
    <style>

:root {
  color-scheme: light;
  --blue: #245edb;
  --blue-hover: #1849b2;
  --ink: #172e50;
  --muted: #576a83;
  --line: #dde5f0;
  --page: #f7f9fc;
  --cyan: #0b7f9c;
  --radius: 24px;
  --page-gutter: max(20px, env(safe-area-inset-left, 0px), env(safe-area-inset-right, 0px));
}
*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; scroll-padding-top: 24px; }
body {
  position: relative;
  isolation: isolate;
  margin: 0;
  min-width: 280px;
  min-height: 100vh;
  font-family: Inter, 'Segoe UI', -apple-system, BlinkMacSystemFont, Arial, sans-serif;
  font-size: 15px;
  line-height: 1.6;
  color: var(--ink);
  background: var(--page);
  -webkit-font-smoothing: antialiased;
}
body::before {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -2;
  pointer-events: none;
  background: var(--portal-watermark, none) center / min(1100px, 86vw) auto no-repeat;
  opacity: .08;
  mix-blend-mode: multiply;
}
body::after {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -1;
  pointer-events: none;
  background: radial-gradient(ellipse at 0 12%, #245edb08, transparent 52%), radial-gradient(ellipse at 100% 72%, #19b2c00a, transparent 48%);
}
input, select, textarea, button { font: inherit; }
a { color: var(--blue); text-underline-offset: 4px; }
a, button { -webkit-tap-highlight-color: transparent; touch-action: manipulation; }
a:focus-visible, button:focus-visible, [tabindex='-1']:focus-visible {
  outline: 3px solid var(--blue);
  outline-offset: 5px;
}
svg { display: block; flex-shrink: 0; }
::selection { background: #d9e7ff; color: var(--ink); }

.oc { display: grid; align-items: center; min-height: 100vh; min-height: 100svh; padding: clamp(20px, 4vw, 48px) var(--page-gutter); }
.ic { width: min(100%, 760px); min-width: 0; margin-inline: auto; }
.portal-page .ic { max-width: 530px; }
#formulario {
  position: relative;
  min-width: 0;
  margin: 0;
  padding: clamp(24px, 3vw, 40px);
  border: 1px solid #dce5f1;
  border-radius: var(--radius);
  background: #fff;
  box-shadow: 0 3px 8px #172e5003, 0 18px 44px #172e5008;
  animation: page-arrive 650ms 80ms both;
}
#formulario::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 36px;
  right: 36px;
  height: 2px;
  border-radius: 5px;
  background: linear-gradient(90deg, #245edb00, #245edb9c 35%, #55a9cc9c 70%, #55a9cc00);
}
.form-head { display: grid; grid-template-columns: 50px minmax(0, 1fr); align-items: center; gap: 12px 15px; padding-bottom: 28px; }
.form-icon { display: grid; place-items: center; width: 50px; height: 50px; border: 1px solid #dce7fa; border-radius: 14px; background: #eff5ff; color: var(--blue); }
.form-icon svg { width: 25px; height: 25px; }
.form-heading { min-width: 0; }
.form-head .eyebrow { display: block; margin: 0 0 5px; color: #57779f; font-size: 9px; letter-spacing: .13em; }
h1 { margin: 0; font-size: clamp(24px, 2.45vw, 31px); font-weight: 750; line-height: 1.23; letter-spacing: -.038em; }
.form-description { grid-column: 1 / -1; margin: 3px 0 0; color: var(--muted); font-size: 13px; line-height: 1.75; }
.gateway-question { margin: 0 0 20px; color: var(--muted); font-size: 13px; line-height: 1.65; overflow-wrap: anywhere; }
.gateway-question:empty { display: none; }
.form-section { min-width: 0; margin: 0 0 28px; padding: 22px 0 0; border: 0; border-top: 1px solid var(--line); }
.form-section legend { max-width: 100%; padding: 0 13px 0 0; color: #274365; font-size: 14px; font-weight: 700; }
.section-number { display: inline-grid; place-items: center; width: 26px; height: 26px; margin-right: 9px; border-radius: 8px; background: #eef4ff; color: var(--blue); font-size: 10px; font-weight: 700; vertical-align: middle; }
.field-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 20px 18px; }
.fel { min-width: 0; }
.field-wide { grid-column: 1 / -1; }
.fel label { display: block; margin-bottom: 7px; color: #344d6b; font-size: 12px; font-weight: 600; transition: color 160ms ease; }
.fel:focus-within label { color: var(--blue); }
.field-required { margin-left: 2px; color: var(--blue); }
input:not([type='hidden']), select, textarea {
  display: block;
  width: 100%;
  max-width: 100%;
  min-width: 0;
  min-height: 48px;
  padding: 11px 13px;
  border: 1px solid #ced9e8;
  border-radius: 10px;
  background: #fbfcfe;
  color: var(--ink);
  font-size: 14px;
  line-height: 1.5;
  transition: border-color 180ms ease, background-color 180ms ease, box-shadow 180ms ease;
}
select {
  appearance: none;
  padding-right: 36px;
  background-image: linear-gradient(45deg, transparent 50%, #66819f 50%), linear-gradient(135deg, #66819f 50%, transparent 50%);
  background-position: calc(100% - 18px) calc(50% + 1px), calc(100% - 13px) calc(50% + 1px);
  background-size: 5px 5px, 5px 5px;
  background-repeat: no-repeat;
  cursor: pointer;
}
select option { background: #fff; color: var(--ink); }
input::placeholder, textarea::placeholder { color: #7a8a9e; opacity: 1; }
input:not([type='hidden']):hover, select:hover, textarea:hover { border-color: #aebfd6; }
input:not([type='hidden']):focus, select:focus, textarea:focus { outline: none; border-color: var(--blue); background-color: #fff; box-shadow: 0 0 0 4px #245edb0e; }
input:disabled, select:disabled, textarea:disabled { cursor: not-allowed; color: #6b7c90; background-color: #f0f3f7; opacity: 1; }
input:user-invalid, select:user-invalid, textarea:user-invalid { border-color: #bf4a4a; }
input[type='date'] { color-scheme: light; }
input[type='date']::-webkit-date-and-time-value { text-align: left; }
input[type='date']::-webkit-calendar-picker-indicator { opacity: .65; cursor: pointer; }
textarea { min-height: 100px; resize: vertical; }
.field-hint { display: inline-block; margin-top: 8px; font-size: 11px; line-height: 1.6; }
.field-hint:hover { color: var(--blue-hover); }
.password-field { position: relative; }
.password-field input { padding-right: 83px; }
.password-toggle {
  position: absolute;
  top: 2px;
  right: 3px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 67px;
  min-height: 44px;
  padding: 7px 9px;
  border: 1px solid transparent;
  border-radius: 7px;
  background: transparent;
  color: var(--blue);
  font-size: 11px;
  font-weight: 650;
  cursor: pointer;
  transition: background-color 160ms ease, border-color 160ms ease;
}
.password-toggle:hover { border-color: #dce7fa; background: #eef4ff; }
.password-toggle:focus-visible { outline-offset: 1px; }
.password-toggle[hidden] { display: none; }
.form-status { padding: 13px 15px; margin: 0 0 24px; border: 1px solid #bdd3f3; border-radius: 10px; background: #f0f6ff; color: #254f86; line-height: 1.65; font-size: 13px; overflow-wrap: anywhere; }
.form-status:empty { display: none; }
.form-status[data-state='error'] { border-color: #edc9c9; background: #fff5f4; color: #963c3c; }
.form-status[data-state='success'] { border-color: #bbdecf; background: #f0faf5; color: #236446; }
.form-status[data-state='pending'] { border-color: #bdd3f3; background: #f0f6ff; color: #254f86; }
.fer { display: flex; align-items: center; justify-content: space-between; gap: 20px; padding-top: 24px; border-top: 1px solid var(--line); }
.submit-note { max-width: 29ch; margin: 0; color: var(--muted); font-size: 11px; line-height: 1.7; }
#btn_enviar {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  min-height: 50px;
  padding: 13px 22px;
  flex-shrink: 0;
  border: 1px solid #1d55cc;
  border-radius: 11px;
  background: var(--blue);
  color: #fff;
  font-size: 13px;
  font-weight: 650;
  line-height: 1.5;
  cursor: pointer;
  box-shadow: 0 5px 12px #245edb22, inset 0 1px 0 #ffffff1f;
  transition: background-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}
#btn_enviar:hover { background: var(--blue-hover); box-shadow: 0 7px 17px #245edb30; transform: translateY(-1px); }
#btn_enviar:active { transform: translateY(0); box-shadow: 0 2px 6px #245edb24; }
#btn_enviar:disabled { opacity: .65; cursor: wait; transform: none; box-shadow: none; }
#btn_enviar svg { width: 18px; height: 18px; transition: transform 180ms ease; }
#btn_enviar:hover:not(:disabled) svg { transform: translateX(3px); }

:root { --portal-watermark: url("{{ asset('images/logo.png') }}"); }
#formulario { isolation: isolate; padding: clamp(22px, 4vw, 40px); animation: form-arrive 650ms cubic-bezier(.22, 1, .36, 1) both; }
#formulario::before { left: 28px; right: 28px; height: 2px; background: linear-gradient(90deg, transparent, #245edb 35%, #54bcc8 65%, transparent); background-size: 200% 100%; animation: light-sweep 1800ms 200ms ease-out both; }
#formulario::after { content: ''; position: absolute; inset: -1px; z-index: -1; border-radius: inherit; pointer-events: none; box-shadow: 0 20px 64px #245edb09; transition: box-shadow 300ms ease; }
#formulario:focus-within::after { box-shadow: 0 22px 70px #245edb13; }
.form-brand { display: flex; align-items: center; justify-content: space-between; gap: 18px; margin-bottom: 30px; padding-bottom: 22px; border-bottom: 1px solid var(--line); }
.form-brand img { display: block; width: 142px; max-width: 48%; height: auto; }
.form-back { display: inline-flex; align-items: center; gap: 7px; min-height: 44px; color: var(--muted); font-size: 12px; text-decoration: none; transition: color 180ms ease; }
.form-back svg { width: 15px; height: 15px; transition: transform 180ms ease; }
.form-back:hover { color: var(--blue); }
.form-back:hover svg { transform: translateX(-3px); }
.eyebrow { font-weight: 700; text-transform: uppercase; line-height: 1.5; }
.form-icon { animation: icon-arrive 750ms 120ms cubic-bezier(.22, 1, .36, 1) both; }
.form-section { animation: form-arrive 600ms both; }
.form-section:nth-of-type(1) { animation-delay: 100ms; }
.form-section:nth-of-type(2) { animation-delay: 180ms; }
.form-section:nth-of-type(3) { animation-delay: 260ms; }
.fer { animation: form-arrive 600ms 300ms both; }
.fel { transition: transform 180ms ease; }
.section-number { transition: color 200ms ease, background-color 200ms ease, box-shadow 200ms ease; }
.form-section:focus-within .section-number { color: #fff; background: var(--blue); box-shadow: 0 3px 10px #245edb25; }
.gateway-question[hidden] { display: none; }
.form-status:not(:empty) { animation: status-arrive 250ms ease-out; }
#btn_enviar { position: relative; overflow: hidden; }
#btn_enviar::before { content: ''; position: absolute; inset: -50% auto -50% -70%; width: 45%; background: linear-gradient(90deg, transparent, #ffffff26, transparent); transform: skewX(-20deg); transition: left 550ms ease; pointer-events: none; }
#btn_enviar:hover:not(:disabled)::before { left: 125%; }
#btn_enviar:disabled::after { content: ''; width: 15px; height: 15px; border: 2px solid #ffffff65; border-top-color: #fff; border-radius: 50%; animation: loading-turn 800ms linear infinite; }
#btn_enviar:disabled svg { display: none; }
.portal-page .field-grid { grid-template-columns: minmax(0, 1fr); gap: 18px; }
.portal-page .fer { display: grid; gap: 14px; }
.portal-page .submit-note { max-width: none; text-align: center; }
@keyframes form-arrive { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: translateY(0); } }
@keyframes icon-arrive { from { opacity: 0; transform: translateY(8px) rotate(-10deg) scale(.92); } to { opacity: 1; transform: none; } }
@keyframes light-sweep { from { background-position: 100% 0; opacity: .3; } to { background-position: 0 0; opacity: 1; } }
@keyframes status-arrive { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: none; } }
@keyframes loading-turn { to { transform: rotate(360deg); } }
@media (max-width: 540px) {
  :root { --page-gutter: max(12px, env(safe-area-inset-left, 0px), env(safe-area-inset-right, 0px)); --radius: 20px; }
  .oc { padding-block: 16px; }
  #formulario { padding: 24px 20px; }
  .form-brand { margin-bottom: 24px; padding-bottom: 18px; }
  .form-brand img { width: 124px; }
  .form-head { grid-template-columns: 42px minmax(0, 1fr); gap: 12px; padding-bottom: 24px; }
  .form-icon { width: 42px; height: 42px; border-radius: 12px; }
  .form-icon svg { width: 22px; height: 22px; }
  h1 { font-size: 24px; }
  .field-grid { grid-template-columns: minmax(0, 1fr); gap: 18px; }
  input:not([type='hidden']), select, textarea { font-size: 16px; }
  .fer { flex-direction: column; align-items: stretch; gap: 16px; }
  .submit-note { max-width: none; text-align: center; }
  #btn_enviar { width: 100%; }
}
@media (max-width: 350px) {
  #formulario { padding: 22px 16px; }
  h1 { font-size: 21px; }
  .form-brand { gap: 10px; }
  .form-brand img { width: 116px; }
  .form-back { font-size: 11px; }
}
@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
  *, *::before, *::after { animation: none !important; transition: none !important; }
  #btn_enviar:hover, #btn_enviar:hover:not(:disabled) svg, .form-back:hover svg { transform: none; }
}
@media (forced-colors: active) {
  select { appearance: auto; background-image: none; }
  body::before, body::after, #formulario::before, #formulario::after, #btn_enviar::before { display: none; }
  input:not([type='hidden']):focus, select:focus, textarea:focus { outline: 2px solid Highlight; outline-offset: 2px; }
}
    </style>
  </head>
  <body class="activities-page">
    <main class="oc">
      <div class="ic">
        <form action="%%AUTH_POST_URL%%" method="post" id="formulario" tabindex="-1" aria-labelledby="form-title">
          <div class="form-brand"><img src="%%IMAGE:logo_cecyteg%%" data-brand-fallback="{{ asset('images/cecyteg2.png') }}" alt="CECyTEG Guanajuato" width="172" height="50"><a class="form-back" href="{{ url('/') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M19 12H5m6-6-6 6 6 6"/></svg>Volver al inicio</a></div>
          <input
                type="hidden"
                name="%%REDIRID%%"
                id="hf_url"
                value="http://10.10.10.10/"
            >

            <input
                type="hidden"
                name="%%MAGICID%%"
                value="%%MAGICVAL%%"
            >

            <input
                type="hidden"
                name="%%USERNAMEID%%"
                id="ft_un"
            >

            <input
                type="hidden"
                name="%%PASSWORDID%%"
                id="ft_pd"
                value="cecyteg"
            >
          <header class="form-head"><span class="form-icon" aria-hidden="true"><svg class="" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.65" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="16" rx="3"/><path d="M16 3v4M8 3v4M3 11h18M8 15h2m4 0h2M8 18h2"/></svg></span><div class="form-heading"><p class="eyebrow">Planeación de sesiones</p><h1 id="form-title">Registro de actividades</h1></div><p class="form-description">Organiza el uso del aula y registra los datos de tu actividad. Los campos con * son obligatorios.</p></header>
          <div class="gateway-question">%%QUESTION%%</div>
          <p class="form-status" id="mensaje" role="status" aria-live="polite" aria-atomic="true"></p>
            <fieldset class="form-section">
                <legend><span class="section-number">01</span>Datos del grupo</legend>
                <div class="field-grid">
                <div class="fel">
                    <label for="ft_semestre">
                    Semestre:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_semestre"
                    name="semestre"
                    required
                    >

                    <option value="">
                    Seleccione
                    </option>

                    <option value="1">
                    1°
                    </option>

                    <option value="2">
                    2°
                    </option>

                    <option value="3">
                    3°
                    </option>

                    <option value="4">
                    4°
                    </option>

                    <option value="5">
                    5°
                    </option>

                    <option value="6">
                    6°
                    </option>

                    </select>
                </div>
                <div class="fel">
                    <label for="ft_grupo">
                    Grupo:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_grupo"
                    name="grupo"
                    required
                    >

                    @foreach ($grupos as $grupo)

                    <option value="{{ $grupo }}">
                    {{ $grupo === '' ? 'Selecciona un grupo' : $grupo }}
                    </option>

                    @endforeach

                    </select>
                </div>
                <div class="fel field-wide">
                    <label for="ft_carrera">
                    Carrera:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_carrera"
                    name="carrera"
                    required
                    >

                    <option value="">
                    Seleccione
                    </option>

                    <option value="PIA">
                    PIA
                    </option>

                    <option value="SyMEC">
                    SyMEC
                    </option>

                    <option value="Programación">
                    Programación
                    </option>

                    <option value="Mantenimiento Industrial">
                    Mantenimiento Industrial
                    </option>

                    </select>
                </div>
                <div class="fel field-wide">
                    <label for="ft_asignatura">
                    Asignatura:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_asignatura"
                    name="asignatura"
                    required
                    >

                    @foreach ($asignaturas as $asignatura)

                    <option value="{{ $asignatura }}">
                    {{ $asignatura === '' ? 'Selecciona una asignatura' : $asignatura }}
                    </option>

                    @endforeach

                    </select>
                </div>
                </div>
            </fieldset>
            <fieldset class="form-section">
                <legend><span class="section-number">02</span>Actividad y horario</legend>
                <div class="field-grid">
                <div class="fel field-wide">
                    <label for="ft_actividad">
                    Actividad:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <input
                    id="ft_actividad"
                    name="actividad"
                    type="text"
                    autocorrect="off"
                    autocapitalize="off"
                    required
                    >
                </div>
                <div class="fel field-wide">
                    <label for="ft_profesor">
                    Profesor:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_profesor"
                    name="profesor"
                    required
                    >

                    @foreach ($profesores as $profesor)

                    <option value="{{ $profesor }}">
                    {{ $profesor === '' ? 'Selecciona un profesor' : $profesor }}
                    </option>

                    @endforeach

                    </select>
                </div>
                <div class="fel">
                    <label for="ft_fecha">
                    Fecha:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <input
                    id="ft_fecha"
                    name="fecha"
                    type="date"
                    required
                    >
                </div>
                <div class="fel">
                    <label for="ft_hora">
                    Hora:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_hora"
                    name="hora"
                    required
                    >

                    <option value="">
                    Seleccione
                    </option>

                    <option value="07:00">7:00</option>
                    <option value="07:50">7:50</option>
                    <option value="08:40">8:40</option>
                    <option value="09:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:50">10:50</option>
                    <option value="11:40">11:40</option>
                    <option value="12:30">12:30</option>
                    <option value="13:20">13:20</option>
                    <option value="14:10">14:10</option>
                    <option value="15:00">15:00</option>

                    </select>
                </div>
                <div class="fel">
                    <label for="ft_aula">
                    Aula:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_aula"
                    name="aula"
                    required
                    >

                    <option value="Del A1 al A35">
                    Aula A
                    </option>

                    <option value="Del B1 al B42">
                    Aula B
                    </option>

                    </select>
                </div>
                <div class="fel">
                    <label for="ft_duracion">
                    Duración:
                    <span class="field-required" aria-hidden="true">*</span></label>

                    <select
                    id="ft_duracion"
                    name="duracion"
                    required
                    >

                    <option value="50">
                    1 módulo (50 minutos)
                    </option>

                    <option value="100">
                    2 módulos (100 minutos)
                    </option>

                    <option value="150">
                    3 módulos (150 minutos)
                    </option>

                    </select>
                </div>
                </div>
            </fieldset>
            <fieldset class="form-section">
                <legend><span class="section-number">03</span>Información adicional · opcional</legend>
                <div class="field-grid">
                <div class="fel field-wide">
                    <label for="ft_observaciones">
                    Observaciones:
                    </label>

                    <input
                    id="ft_observaciones"
                    name="observaciones"
                    type="text"
                    autocorrect="off"
                    autocapitalize="off"
                    >
                </div>
                <div class="fel field-wide">
                    <label for="ft_url">
                    URL:
                    </label>

                    <input
                    id="ft_url"
                    name="url"
                    type="url"
                    autocorrect="off"
                    autocapitalize="off"
                    >
                </div>
                </div>
            </fieldset>
          <div class="fer">
            <p class="submit-note">Revisa la fecha, el horario y el aula antes de registrar.</p>
            <button id="btn_enviar" type="submit">Registrar actividad <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></button>

          </div>
        </form>
      </div>
    </main>
    <script>
var actividades = [];


document
    .querySelector("#formulario")
    .addEventListener("submit", function (event) {

        event.preventDefault();


        /*
         * DATOS DEL GRUPO
         */

        let semestre = document
            .getElementById("ft_semestre")
            .value;

        let grupo = document
            .getElementById("ft_grupo")
            .value;

        let carrera = document
            .getElementById("ft_carrera")
            .value;

        let asignatura = document
            .getElementById("ft_asignatura")
            .value;


        /*
         * DATOS DE LA ACTIVIDAD
         */

        let nombre = document
            .getElementById("ft_actividad")
            .value;

        let profesor = document
            .getElementById("ft_profesor")
            .value;

        let fecha = document
            .getElementById("ft_fecha")
            .value;

        let hora = document
            .getElementById("ft_hora")
            .value;

        let aula = document
            .getElementById("ft_aula")
            .value;

        let duracion = document
            .getElementById("ft_duracion")
            .value;

        let url = document
            .getElementById("ft_url")
            .value;

        let observaciones = document
            .getElementById("ft_observaciones")
            .value;


        /*
         * CAMBIAR ESTADO DEL FORMULARIO
         */

        document
            .getElementById("mensaje")
            .textContent = "Registrando...";

        document
            .getElementById("btn_enviar")
            .disabled = true;


        /*
         * ENVIAR AL API
         */

        fetch(
            "http://10.10.10.10:8000/api/actividades",
            {
                method: "POST",

                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                },

                body: JSON.stringify({

                    semestre: semestre,
                    grupo: grupo,
                    carrera: carrera,
                    asignatura: asignatura,
                    observaciones: observaciones,
                    nombre: nombre,
                    profesor: profesor,
                    fecha: fecha,
                    hora: hora,
                    aula: aula,
                    duracion: duracion,
                    url: url

                })
            }
        )

        .then(async function (response) {

            const data = await response.json();


            if (!response.ok) {

                /*
                 * Laravel normalmente devuelve:
                 *
                 * {
                 *     message: "...",
                 *     errors: {
                 *         campo: ["..."]
                 *     }
                 * }
                 */

                let mensaje =
                    data.message ||
                    "No fue posible registrar la actividad.";


                /*
                 * Si Laravel devuelve errores de validación,
                 * mostrar el primero.
                 */

                if (data.errors) {

                    let primerCampo =
                        Object.keys(data.errors)[0];

                    if (
                        primerCampo &&
                        data.errors[primerCampo] &&
                        data.errors[primerCampo][0]
                    ) {

                        mensaje =
                            data.errors[primerCampo][0];

                    }

                }


                throw new Error(mensaje);

            }


            return data;

        })


        .then(function (data) {

            /*
             * REGISTRO CORRECTO
             */

            document
                .getElementById("mensaje")
                .textContent =
                    "✅ Actividad registrada correctamente.";


            /*
             * LIMPIAR SOLAMENTE LOS CAMPOS
             * DE LA ACTIVIDAD.
             */

            document
                .getElementById("ft_actividad")
                .value = "";

            document
                .getElementById("ft_profesor")
                .selectedIndex = 0;

            document
                .getElementById("ft_fecha")
                .value = "";

            document
                .getElementById("ft_hora")
                .selectedIndex = 0;

            document
                .getElementById("ft_aula")
                .selectedIndex = 0;

            document
                .getElementById("ft_duracion")
                .selectedIndex = 0;

            document
                .getElementById("ft_observaciones")
                .value = "";

            document
                .getElementById("ft_url")
                .value = "";


            /*
             * HABILITAR BOTON
             */

            document
                .getElementById("btn_enviar")
                .disabled = false;


            /*
             * CURSOR EN ACTIVIDAD
             */

            document
                .getElementById("ft_actividad")
                .focus();

        })


        .catch(function (error) {

            /*
             * ERROR
             */

            document
                .getElementById("btn_enviar")
                .disabled = false;


            document
                .getElementById("mensaje")
                .textContent =
                    "❌ " + error.message;

        });

    });


    </script>
    <script>
    (() => {
      document.querySelectorAll('[data-brand-fallback]').forEach(logo => {
        const fallback = () => {
          if (logo.dataset.fallbackUsed) return;
          logo.dataset.fallbackUsed = 'true';
          logo.src = logo.dataset.brandFallback;
        };
        logo.addEventListener('error', fallback, { once: true });
        if (logo.getAttribute('src').startsWith('%') || (logo.complete && logo.naturalWidth === 0)) fallback();
      });
      const password = document.getElementById('ft_password');
      const toggle = document.getElementById('passwordToggle');
      if (password && toggle) {
        toggle.hidden = false;
        toggle.addEventListener('click', () => {
          const show = password.type === 'password';
          password.type = show ? 'text' : 'password';
          toggle.textContent = show ? 'Ocultar' : 'Mostrar';
          toggle.setAttribute('aria-pressed', String(show));
          toggle.setAttribute('aria-label', show ? 'Ocultar contraseña' : 'Mostrar contraseña');
        });
      }
      const question = document.querySelector('.gateway-question');
      if (question && /^%%[A-Z_]+%%$/.test(question.textContent.trim())) question.hidden = true;
      const status = document.getElementById('mensaje');
      if (status && 'MutationObserver' in window) {
        const updateStatus = () => {
          const message = status.textContent.trim();
          status.dataset.state = /registrando|autenticando/i.test(message) ? 'pending' : /registrada correctamente/i.test(message) ? 'success' : message ? 'error' : '';
        };
        new MutationObserver(updateStatus).observe(status, { childList: true, characterData: true, subtree: true });
        updateStatus();
      }
    })();
    </script>
  </body>
</html>
