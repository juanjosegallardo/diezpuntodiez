<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tramite de carátula IMSS</title>
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
            <h2>Tramitar Caratula IMSS</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://serviciosdigitales.imss.gob.mx/portal-ciudadano-web-externo/derechohabientes/tramite/registro"
                 onclick="abrirVentanaIMSS(event)">
                 Abrir IMSS
              </a>
            </li>

            <li>
              Copia tu CURP
              <button onclick="copiar('{{ $registro->usuario->datos['CURP']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Curp
              </button>
              , pégalo donde dice <b>“Ingresa tu CURP”</b> y haz click en <b>siguiente</b>.
            </li>

            <li>
                Copia tu NSS 
                <button onclick="copiar('{{ $registro->usuario->datos['NSS']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                    Copiar NSS
              </button>
            </li>
            <li>
              Copia tu correo electrónico
              <button onclick="copiar('{{ $registro->usuario->datos['Correo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Correo
              </button>
              , pégalo donde dice <b>“Ingresa tu correo electrónico personal”</b> y haz click en <b>siguiente</b>.
            </li>

            <li>Escribe a mano tu correo en donde dice: <b>Confirma tu correo electrónico personal</b> </li>
            <li>Escribe las letras de la imagen que se muestra y escribelas donde dice <b>Captura</b></li>

            <li>Abre tu correo electrónico y revisa el archivo si no sabes como hacerlo puedes hacer click en el siguiente enlace <a href="http://10.10.10.10:8000/me?url=correo">Abrir correo electrónico</a> </li>
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
      const url = 'https://serviciosdigitales.imss.gob.mx/portal-ciudadano-web-externo/derechohabientes/tramite/registro';
      if (!ventanaIMSS || ventanaIMSS.closed) {
        ventanaIMSS = window.open(url, 'suredsu');
      } else {
        ventanaIMSS.focus();
      }
    }
  </script>
</body>
</html>
