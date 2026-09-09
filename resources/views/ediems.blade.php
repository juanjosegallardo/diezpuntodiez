<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accede a EDIEMS</title>
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
            <h2>Accede al Pretest EDIEMS</h2>
          </div>
        <hr>
          <ol class="fs-5 ps-4">

           
            <li>
              Copia tu password {{ $registro->usuario->datos['Password EDIEMS']['valor'] ?? '' }}
              <button onclick="copiar('{{ $registro->usuario->datos['Password EDIEMS']['valor'] ?? '' }}')" class="btn btn-sm btn-primary">
                Copiar Password
              </button>
            </li>
           
            <li>
              
              <button onclick="abrirVentanaTornelo(event)" class="btn btn-sm btn-primary">
                Abrir EDIEMS
              </button>
              y pégalo donde dice <b>“Password”</b>.
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

    let ventanaBBVA = null;
    function abrirVentanaTornelo(e) {
      e.preventDefault();
      const url = 'https://ingreso.cecyte.edu.mx/evaluaciontest';
      if (!ventanaBBVA || ventanaBBVA.closed) {
        ventanaBBVA = window.open(url, 'superateBBVA');
      } else {
        ventanaBBVA.focus();
      }
    }

  </script>
</body>
</html>
