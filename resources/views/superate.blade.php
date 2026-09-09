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
            <h2>Crea tu cuenta BBVA Supérate</h2>
          </div>
   
          <span class="fs-5 ps-4">
            Si Ya tienes cuenta inicia sesion <a href="https://escuelas.superateconfundacionbbva.mx/" target="_blank">aqui</a> si no sigue los siguientes pasos
          </span>
        <hr>
          <ol class="fs-5 ps-4">

            <li>
              Ingresa a:
              <a href="https://escuelas.superateconfundacionbbva.mx/registro"
                 onclick="abrirVentanaBBVA(event)">
                 Registrar BBVA Supérate
              </a>
            </li>
            <li>
              Copia el nombre de usuario
              <button onclick="copiar('{{ substr($registro->usuario->datos['CURP']['valor'],0,10) ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Nombre de Usuario
              </button>
              y pégalo donde dice <b>“Escribe tu nombre de usuario”</b>.
            </li>

            <li>Selecciona <b>“Soy estudiante”</b> donde dice <b>Selecciona tu perfil</b>.</li>
            <li>Haz clic en <b>“Continuar”</b>.</li>
            <li>Haz clic en <b>“Tengo una clave de grupo”</b>.</li>

            <li>
              Copia el grupo
              <button onclick="copiar('{{ $registro->usuario->datos['GRUPO SUPERATE']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Grupo
              </button>
              y pégalo donde dice <b>Escribe la clave de grupo</b>.
            </li>

            <li>
              Copia la contraseña
              <button onclick="copiar('{{ $registro->usuario->datos['PASSWORD SUPERATE']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Contraseña
              </button>
              y pégala donde dice <b>Crea tu contraseña de acceso</b>.
            </li>

            

            <li>Pégala nuevamente en donde dice <b>Vuelve a escribir tu contraseña</b>.</li>
            <li>Marca la casilla <b>“He leído y acepto el Aviso de Privacidad de Supérate”</b>.</li>
            <li>Haz clic en <b>“Finalizar”</b>.</li>

            <li>
              Copia este correo
              <button onclick="copiar('{{ $registro->usuario->datos['Correo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Correo
              </button>
              y pégalo donde dice <b>Correo electrónico de tu padre, madre o tutor</b>.
            </li>

            <li>Pégalo nuevamente en donde dice <b>Confirma el correo electrónico</b>.</li>
            <li>Haz clic en <b>Guardar cambios</b>.</li>

            <li>
              Ingresa a:
              <a href="https://outlook.live.com/"
                 onclick="abrirVentanaOffice(event)">
                 Outlook
              </a>
            </li>

            <li>Haz clic en <b>Iniciar sesión</b>.</li>
            <li>Pega tu correo electrónico donde dice <b>Iniciar sesión</b>.</li>

            <li>
              Copia esta contraseña
              <button onclick="copiar('{{ $registro->usuario->datos['Password Correo Nuevo']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Contraseña Correo
              </button>
              y pégala donde dice <b>Escribe tu contraseña</b>.
            </li>

            <li>Haz clic en <b>Iniciar sesión</b>.</li>
            <li>Busca el correo con el asunto <b>“¡Bienvenido a Supérate con Fundación BBVA!”</b>.</li>
            <li>Haz clic en el botón <b>“Valida aquí el correo”</b>.</li>
            <li>Cierra tu sesión de correo.</li>
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

    let ventanaBBVA = null;
    function abrirVentanaBBVA(e) {
      e.preventDefault();
      const url = 'https://escuelas.superateconfundacionbbva.mx/registro';
      if (!ventanaBBVA || ventanaBBVA.closed) {
        ventanaBBVA = window.open(url, 'superateBBVA');
      } else {
        ventanaBBVA.focus();
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
