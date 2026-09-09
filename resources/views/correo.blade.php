<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresa a tu correo electrónico</title>
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
            <h2>Ingresa a tu correo electrónico institucional</h2>
          </div>

          <ol class="fs-5 ps-4">
            <li>
              Ingresa a:
              <a href="https://outlook.live.com/"
                 onclick="abrirVentanaOffice(event)">
                 Outlook
              </a>
            </li>
            <li>
              Haz click en iniciar sesión
            </li>

            <li>
              Copia tu correo electrónico
              <button onclick="copiar('{{ $registro->usuario->datos['Correo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Correo
              </button>
              , pégalo donde dice <b>“Correo electrónico, teléfono o Skype”</b> y haz click en <b>siguiente</b>.
            </li>

            
            <li>
              Introduce tu contraseña si no la conoces posiblemente se a esta:
              <button onclick="copiar('{{ $registro->usuario->datos['Password Correo Nuevo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Contraseña de tu correo
              </button>
              , pégalo donde dice <b>“Contraseña”</b> y haz click en <b>Iniciar sesión</b> .
            </li>
            
            
          </ol>

          <div class="fs-5 alert alert-danger text-center" role="alert">
            <b> ¿Tu contraseña es incorrecta?</b>

          </div>
          <ol class="fs-5 ps-4">
              <li>
                Abre el siguiente formulario

                <a href="https://forms.gle/ygw7NKyoVSAFXXoZ6"
                  onclick="abrirVentanaFormulario(event)">
                  Formulario de solicitudes
                </a>

              </li>
              <li>Llena tus datos</li>
              <li>En <b>Tipo de solicitud</b> Seleccion Soporte </li>
              <li>
                En <b>Descripción</b> escribe <b>Restablecer la contraseña de mi correo electrónico</b> 
                <button onclick="copiar('Restablecer la contraseña de mi correo electrónico')" class="btn btn-sm btn-primary">
                  Copiar Descripción
                </button>
              </li>
              <li>Informa al programador de tu solicitud para agilizar la restauración</li>
            </ol>

          <div class="fs-5 alert alert-danger text-center" role="alert">
            <b> ¿Tu cuenta esta ligada a un correo que ya no tienes?</b>

          </div>
          <ol class="fs-5 ps-4">
              <li>
                Abre el siguiente formulario

                <a href="https://forms.gle/ygw7NKyoVSAFXXoZ6"
                  onclick="abrirVentanaFormulario(event)">
                  Formulario de solicitudes
                </a>

              </li>
              <li>Llena tus datos</li>
              <li>En <b>Tipo de solicitud</b> Seleccion Soporte </li>
              <li>
                En <b>Descripción</b> escribe <b>Restablecer el MFA de mi correo electrónico</b> 
                <button onclick="copiar('Restablecer el MFA de mi correo electrónico')" class="btn btn-sm btn-primary">
                  Copiar Descripción
                </button>
              </li>
              <li>Informa al programador de tu solicitud para agilizar la eliminaciòn de tu numero de teléfono, sin embargo esta solicitud puede tardar algunos días</li>
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

    
    let ventanaFormulario = null;
    function abrirVentanaFormulario(e) {
      e.preventDefault();
      const url = 'https://forms.gle/ygw7NKyoVSAFXXoZ6';
      if (!ventanaFormulario || ventanaFormulario.closed) {
        ventanaFormulario = window.open(url, 'ventanaFormulario');
      } else {
        ventanaFormulario.focus();
      }
    }



  </script>
</body>
</html>
