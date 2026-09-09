<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calificaciones tercer parcial</title>
<title>Consulta tus calificaciones</title>
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
<body>
 <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card p-5">
          <div class="text-center mb-4">
            <h1 class="mb-2">{{ $registro->usuario->nombre }}</h1>
            <h2>Consulta de calificaciones tercer parcial</h2>
            <div class="alert alert-warning">
                Estas calificaciones son solo de los examenes que no pertenecen a Mi Aula Cecyteg
            </div>    
          </div>
   
          <div id="calificaciones">
                Cargando calificaciones....
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function consultarCalificaciones()
    {
        fetch('https://script.google.com/macros/s/AKfycbxU2R2B8JcJg4Z0EMu1Sv-nVFvU1N9cJ-4irbCi0tfEyTS9gfkS8NsJRGfxrtu40HhTsg/exec?nombre={{ $registro->usuario->nombre }}&grupo={{ $registro->usuario->grupo }}')
        .then(response => {
            // 1. Verifica si la respuesta fue exitosa.
            if (!response.ok) {
            throw new Error('La respuesta de la red no fue correcta: ' + response.statusText);
            }
            // 2. Convierte la respuesta a formato JSON.
            return response.json();
        })
        .then(data => {
            const div_calificaciones = document.getElementById("calificaciones");
            let cadena="<table width='100%'><tr><th>Materia</th><th>Aciertos</th><th>Cal Base 3</th><th>Cal Base 10</th><tr>";
            for(i=0; i<data.calificaciones.length;i++)
            {
                cadena+="<tr>";
                cadena += "<td>" + data.calificaciones[i]["MATERIA"] + "</td>";
                cadena += "<td align='center'>"+ data.calificaciones[i]["ACIERTOS"] + "</td>";
                cadena += "<td align='center'>" + data.calificaciones[i]["CAL. BASE 3"] + "</td>";
                cadena += "<td align='center'>" + data.calificaciones[i]["CAL. BASE 10"] + "</td>";
                cadena+="</tr>";
            }
            cadena.innerHTML+="</table>";
            div_calificaciones.innerHTML = cadena;

       
        })
        .catch(error => {
            console.error('Hubo un problema con la operación de fetch:', error);
        });

    }

    consultarCalificaciones();
  </script>
</body>
</html>