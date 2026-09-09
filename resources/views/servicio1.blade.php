<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crea tu cuenta BBVA Supérate</title>
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
            <h2>Sube tus activiades de servicio social</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://escuelas.superateconfundacionbbva.mx/registro"
                 onclick="abrirPortalEstudiantil(event)">
                 Portal estudiantil
              </a>
            </li>

            <li>
              Copia numero de control
              <button onclick="copiar('{{ $registro->usuario->usuario }}')" class="btn btn-sm btn-primary">
                Copiar Nombre de Usuario
              </button>
              y pégalo donde dice <b>“Escribe tu nombre de usuario”</b>.
            </li>

            
            <li>
              Copia la contrseña:
              <button onclick="copiar('{{ $registro->usuario->password }}')" class="btn btn-sm btn-primary">
                Copiar Contraseña
              </button>
              y pégalo donde dice <b>“Contraseña”</b>.
            </li>

            <li>
              Ingresa en Servicio social ,despues <b>Solicitud de servicio social.</b>
            </li>

            <li>
              Ingresa en <b>seguimiento.</b>
            </li>
            
            <li>
              Ingresa en <b>informe bimestral</b> al cual te corresponda
            </li>

            <li>
                Copia tu actividad 
                <button onclick="copiar('{{ $registro->usuario->datos['actividad']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                    Copiar actividad
              </button>
            </li>

             <li>
              Copia total de horas para este infrome:
              <button onclick="copiar('180')" class="btn btn-sm btn-primary">
                Copiar horas
              </button>
              y pégalo donde dice <b>“Total de horas para este informe”</b>.
            </li>

            <li>
              Dar click en boton <b>“Guardar”</b>.
            </li>


            
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

    let portalEstudiantil = null;
    function abrirPortalEstudiantil(e) {
      e.preventDefault();
      const url = 'https://sae.cecyteg.edu.mx:4046/PortalAlumno/Account/Login';
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
