<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta SUREDSU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #0d6efd;
    }
    h2 {
      color: #495057;
      font-weight: 600;
      margin-bottom: 1.5rem;
    }
    ol li {
      margin-bottom: 1rem;
      line-height: 1.6;
    }
    a {
      font-weight: 500;
    }
    button.btn {
      margin-left: 5px;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card p-5">
          <div class="text-center mb-4">
            <h1 class="mb-2">{{ $registro->usuario->nombre }}</h1>
            <h2>Responder encuesta SUREDSU</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://suredsu.guanajuato.gob.mx/modulos/acceso/acceso.aspx"
                 onclick="abrirVentanaSUREDSU(event)">
                 Abrir SUREDSU
              </a>
            </li>

            <li>
              Copia tu CURP
              <button onclick="copiar('{{ $registro->usuario->datos['CURP']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar CURP
              </button>
              y pégalo donde dice <b>“Ingresa con tu CURP”</b>.
            </li>

            <li>
              Copia tu correo electrónico
              <button onclick="copiar('{{ $registro->usuario->datos['CORREO']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Correo
              </button>
              y pégalo donde dice <b>“Email”</b>.
            </li>

            <li>Selecciona la casilla <b>No soy un robot</b> y resuelve el CAPTCHA si aparece.</li>
            <li>Haz clic en el botón <b>“Enviarme email de activación”</b>.</li>
            <li>Revisa tu bandeja de entrada (o correo no deseado) para encontrar el correo.</li>
            <li>Ingresa el código de validación en el campo <b>“Introduce el código de validación”</b>.</li>
            <li>Da clic en <b>Validar código</b>.</li>
            <li>Marca la casilla <b>Acepto los términos de uso</b> y haz clic en <b>Acepto</b>.</li>
            <li>Completa tus datos personales.</li>
            <li>Verifica que aparezca <b>CECYTE PLANTEL PÉNJAMO</b> y da clic en <b>Sí</b>.</li>
            <li>Completa la sección de expectativas de estudios universitarios.</li>
            <li>Llena el estudio socioeconómico.</li>
            <li>Llena la encuesta de aptitudes.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function copiar(texto) {
      if (!texto) return alert("No hay texto para copiar.");
      if (!navigator.clipboard) {
        const textarea = document.createElement("textarea");
        textarea.value = texto;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
      } else {
        navigator.clipboard.writeText(texto)
          .then(() => console.log("Texto copiado"))
          .catch(err => console.error("Error al copiar:", err));
      }
    }

    let ventanaSUREDSU = null;
    function abrirVentanaSUREDSU(e) {
      e.preventDefault();
      const url = 'https://suredsu.guanajuato.gob.mx/modulos/acceso/acceso.aspx';
      if (!ventanaSUREDSU || ventanaSUREDSU.closed) {
        ventanaSUREDSU = window.open(url, 'suredsu');
      } else {
        ventanaSUREDSU.focus();
      }
    }
  </script>
</body>
</html>
