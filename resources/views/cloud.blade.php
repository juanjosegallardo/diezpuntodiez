<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloudlabs</title>
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
            <h2>Igresa a cloudlabs</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://platform.cloudlabslearning.com"
                 onclick="abrirVentanaIMSS(event)">
                 Cloudlabs
              </a>
            </li>
            <li>
              Copia tu correo electrónico
              <button onclick="copiar('{{ $registro->usuario->datos['Correo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Correo
              </button>
              , pégalo donde dice <b>“Usuario o email”</b>.
            </li>
            <li>
              Copia tu Password
              <button onclick="copiar('{{ $registro->usuario->datos['cloudlabs']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Password
              </button>
              , pégalo donde dice <b>“Contraseña”</b> y haz click en <b>Iniciar Sesiòn</b>.
            </li>

      
<!--
            <li>Abre tu correo electrónico y revisa el archivo si no sabes como hacerlo puedes hacer click en el siguiente enlace <a href="http://10.10.10.10:8000/me?url=correo">Abrir correo electrónico</a> </li>
-->
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

    let ventanaIMSS = null;
    function abrirVentanaIMSS(e) {
      e.preventDefault();
      const url = 'https://platform.cloudlabslearning.com';
      if (!ventanaIMSS || ventanaIMSS.closed) {
        ventanaIMSS = window.open(url, 'suredsu');
      } else {
        ventanaIMSS.focus();
      }
    }
  </script>
</body>
</html>
