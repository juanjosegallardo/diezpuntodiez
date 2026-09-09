<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @page {
        margin: 250px 25px 70px 25px; /* top, right, bottom, left */
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;

    }
    header {
        position: fixed;
        top: -163px;
        left: 0;
        right: 0;
        text-align: center;

    }
    table,  tr,  td, th
    {
        border:  none;
        padding: 0;                  /* sin espacio interno */
        margin: 0;
    }

    td.campo
    {
      
    
    }


    .borde
    {
        border: 1px solid #000;      /* línea negra simple en todas las celdas */
        padding: 0;                  /* sin espacio interno */
        margin: 0;
    }

    td.opcion
    {
        border: 1px solid #000;  
        padding: 0 !important;
        margin: 0 !important;
        text-align: center;
    }






    </style>
</head>
<body>


<header>
<table width="100%" border="0" cellpading="0" cellspacing="0" >
    <tr >
        <th  style="height: 35px;"  width="8%" align="center">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/cecyteg2.png'))) }}" alt="Logo" style="width:135px;">

        </th>
        <th  width="50%" align="center" style="font-size: 12px">Aceptación de Calificaciones y Faltas</th>
        <th  style="font-size: 12px" width="15%" align="center">
            CÓDIGO: <br>
            FO104-070/A
        </th>
    </tr>
</table>
<br>
<br>
<table width="100%"  cellpading="0" cellspacing="0" >
    <tr>
        <td height="15px" width="5%"> <b>Centro Trabajo:</b></td>
        <td width="10%"  class="campo">11ETC0018L - Pénjamo</td>
        <td width="1%"></td>
        <td width="5%"><b>Turno:</b></td>
        <td width="20%"  class="campo">MATUTINO</td>
    </tr>
    <tr>
        <td height="15px"><b>Plan de Estudios:</b></td>
        <td  class="campo">{{ $grupo["especialidad"] }}</td>
        <td></td>
        <td><b>Grupo:</b></td>
        <td  class="campo">{{ $grupo["grupo"] }}</td>
    </tr>

    <tr>
        <td height="15px"><b>Asignatura:</b></td>
        <td class="campo">{{ $materia }}</td>
        <td></td>
        <td><b>Semestre:</b></td>
        <td class="campo">{{ $grupo["semestre"] }}</td>
    </tr>
    <tr>
        <td height="15px"><b>Docente:</b></td>
        <td class="campo">{{ $profesor }}</td>
        <td></td>
        <td><b>Fecha:</b></td>
        <td class="campo">{{ $dia."/". $mes."/".$anio  }}</td>
    </tr>
</table>


<div align="left">
<br>

<br>
<table  cellpading="0" cellspacing="0" width="100%">



    </table>

</div>
</header>

<main>
    <table  cellpading="0" cellspacing="0" width="100%">
        <tr class="cabecera">
            <th width="5%"></h>
            <th width="15%" ></th>
            <th width="33%"></h>
            <th colspan="2" class="borde">Extraordinario 2
            </th>
   
            <th width="15%"></h>
            <th width="20%"></th>
            
        </tr>

        <tr class="cabecera">
            <th width="5%">#</h>
            <th width="15%" >No. Control</th>
            <th width="33%">Nombre del alumno</h>
            <th class="borde" width="6%">Evaluación</th>
            <th class="borde" width="6%">Faltas</th>
            <th class="borde" width="15%">Firma del Estudiante</h>
            <th   class="borde" width="20%">Observaciones</th>
            
        </tr>
        @php($no=1);
        @foreach ( $registros as $registro )

        <tr>
            <th style="border-bottom: solid 1px" height="20px" width="5%">{{$no++  }}</th>
            <td style="border-bottom: solid 1px" width="15%">&nbsp;{{ $registro->usuario->usuario }}</td>
            <td style="border-bottom: solid 1px" width="33%">&nbsp;{{ $registro->usuario->nombre }}</td>
            <td  class="borde" width="6%"></td>
            <td  class="borde" width="6%"></td>
            <td  class="borde" width="15%"></td>
            <td  class="borde" width="20%"></td>
        </tr>
                
        @endforeach
    </table>


</main>
<footer>
    <br><br>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>


                        Nota 1: Al firmar este formato el estudiante acepta la retroalimentación de calificaciones y faltas reconociendo que fué informado de los resultados de la evaluación 

                <br>
                <br>
            </td>
        </tr>
    </table>
</footer>


</body>
</html>