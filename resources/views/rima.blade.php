<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresa a la prueba RIMA</title>
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
            <h2>Ingresa a la prueba RIMA</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://igestorservicios.seg.guanajuato.gob.mx/seguimiento"
                 onclick="abrirPortalEstudiantil(event)">
                 Prueba RIMA
              </a>
            </li>

            <li>
              Haz click en <b>"ingresa con cuenta institucional"</b>
            </li>

            <li>
              Copia la cuenta
              <button onclick="copiar('{{ $registro->usuario->datos['usuario_rima']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Cuenta
              </button>
              y pégalo donde dice <b>“Cuenta”</b>.
            </li>

            
            <li>
              Copia la contrseña:
              <button onclick="copiar('{{ $registro->usuario->datos['password_rima']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Contraseña
              </button>
              y pégalo donde dice <b>“Contraseña”</b>.
            </li>
            
            <li>
              Haz click en <b>"Validar CURP"</b>
            </li>

             <li>
              Una vez terminada la evaluacion dar click en <b>"GUARDAR"</b>
            </li>
            
            
            <li>
             Para terminar da click en el icono azul donde se muestra la foto de usuario y dar click en<b>"CERRAR SESIÓN"</b>
            </li>
            
          </ol>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  function copiar(texto) {
      if (!texto) {
        alert("No hay texto para copiar.");
        return;
      }

      // Convierte \n literales en saltos reales
      texto = texto.replace(/\\n/g, '\n');

      // Opcional: limpia espacios repetidos
      texto = texto.trim();

      if (!navigator.clipboard) {
        const textarea = document.createElement("textarea");

        textarea.value = texto;
        textarea.style.position = "fixed";
        textarea.style.opacity = "0";

        document.body.appendChild(textarea);

        textarea.focus();
        textarea.select();

        try {
          document.execCommand("copy");
          console.log("Texto copiado");
        } catch (err) {
          console.error("Error al copiar:", err);
        }

        document.body.removeChild(textarea);

      } else {
        navigator.clipboard.writeText(texto)
          .then(() => {
            console.log("Texto copiado");
          })
          .catch(err => {
            console.error("Error al copiar:", err);
          });
      }
    }
    let portalEstudiantil = null;
    function abrirPortalEstudiantil(e) {
      e.preventDefault();
      const url = 'https://igestorservicios.seg.guanajuato.gob.mx/seguimiento';
      if (!portalEstudiantil || portalEstudiantil.closed) {
        portalEstudiantil = window.open(url, 'superateBBVA');
      } else {
        portalEstudiantil.focus();
      }
    }

    let ventanaOffice = null;
    function abrirVentanaOffice(e) {
      e.preventDefault();
      const url = 'https://outlook.live.com/';
      if (!ventanaOffice || ventanaOffice.closed) {
        ventanaOffice = window.open(url, 'ventanaOffice');
      } else {
        ventanaOffice.focus();
      }
    }
  </script>
</body>
</html>
