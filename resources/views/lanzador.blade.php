<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios Activos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Formularios Activos</h1>



    
    <?php if(isset($_GET["planb"])):?>
    <div class="alert alert-warning text-center">
        <h2>PLAN B</h2>
        Si estas aquí es seguramente por que Mi Aula CECYTEG falló, no te preocupes aquí vas a poder realizar tu examen
    </div>
    <div class="alert alert-primary text-center">
        <i>“Tu puedes ser, <b>lo que quieras ser.</b>”</i>
    </div>
    <?php endif;?>

    <div class="alert alert-primary text-center">
        <i>“Si Chucky hizo todo eso sin pilas, imagínate lo que tú puedes lograr si sí <b>te pones las pilas.</b>”</i>
    </div>
    <div class="row">
    @foreach ($actividades as $actividad):

        <div class="col-md-6 col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{  $actividad['nombre'] }}</h5>
                    <p class="card-text">
                        <strong>Grupo:</strong>{{  $actividad['grupo'] }} <br>
                        <strong>Inicio:</strong> {{  $actividad['fecha_entrada'] }}<br>
                    </p>
                    <a href="seb://10.10.10.10:8000/actividades/{{ $actividad["id"] }}/seb" class="btn btn-primary">
                        Abrir Examen Mi Aula
                    </a>

                    <a href="seb://10.10.10.10:8000/actividades/{{ $actividad["id"] }}/seb?respaldo=true" class="btn btn-primary">
                        Abrir Examen Formularios
                    </a>


                    
    
                  
                   
                </div>
            </div>
        </div>
   
    @endforeach


</div>

</body>
</html>
