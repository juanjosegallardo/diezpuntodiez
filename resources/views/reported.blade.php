<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @page {
        margin: 133px 25px 70px 25px; /* top, right, bottom, left */
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;
    }
    header {
        position: fixed;
        top: -113px;
        left: 0;
        right: 0;
        text-align: center;

    }
    table, tr, td,th
    {
        border: 1px solid #000;      /* línea negra simple en todas las celdas */
        padding: 0;                  /* sin espacio interno */
        margin: 0;
    }


    footer {
        position: fixed;
        bottom: -30px;
        left: 0;
        right: 0;
        height: 30px;

        text-align: center;
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 15px;
    }
    .cabecera
    {
        background-color: blue;
        color: white;

    }
    .subcabecera
    {
        background-color: lightgray;
        color: black;

    }

        table.firma {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      text-align: center;
    }
    table.firma td {
      border: none;
      padding: 20px 0 5px 0; /* espacio para la línea */
    }
    /* Línea de firma en medio de los dos renglones */
    table.firma tr.linea td {
      border-top: 1px solid #000;
    }

    </style>
</head>
<body>


<header>
<table width="100%" border="1" cellpading="0" cellspacing="0" >
    <tr >
        <th  style="height: 40px;"  width="8%" align="center">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/cecyteg.png'))) }}" alt="Logo" style="width:35px;">

        </th>
        <th  width="85%" align="center">REGISTRO DE HORAS PRÁCTICA EN CENTRO DE CÓMPUTO</th>
        <th  width="7%" align="center">
            CÓDIGO: <br>
            FO236-004/C
        </th>
    </tr>
</table>
<div align="left">
<br>
Unidad Académica: <u>Pénjamo</u>
<br><br>
<table border="1" cellpading="0" cellspacing="0" width="100%">

        <tr class="cabecera">
            <th  style="height: 40px;"  width="3%" rowspan="2 align="center"">No.</th>
            <th  width="5%" rowspan="2" align="center">FECHA</th>
            <th  width="20%" rowspan="2" align="center">NOMBRE</th>
            <th  colspan="4" align="center">USUARIO</th>
            <th  width="4%" rowspan="2"  align="center">HORA DE ENTRADA</th>
            <th  width="4%" rowspan="2" align="center">HORA DE SALIDA</th>
            <th  width="4%" rowspan="2" align="center">GRUPO</th>
            <th  width="5%" rowspan="2" align="center">No. EQUIPO</th>
            <th  width="20%" rowspan="2" align="center">ACTIVIDAD</th>
            <th colspan="2" align="center" align="center">¿USO INTERNET?</th>
            <th  width="7%" rowspan="2 align="center"">OBSERVACIONES</th>

        </tr>
        <tr  class="subcabecera">

            <td  width="4%" align="center">ALUMNO</td>
            <td  width="4%" align="center">DOCENTE</td>
            <td  width="4%" align="center">ADMIN</td>
            <td  width="4%" align="center">EXTERNO</td>

            <td  width="4%" align="center">SI</td>
            <td  width="4%" align="center">NO</td>

        </tr>

    </table>

</div>
</header>

<footer >
    <div style="position: absolute; top: -40px; left: 420px;">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/firma.png'))) }}" alt="Logo" style="width:135px;">
    </div>


    <div style="width:100%; text-align:center;">
        <div style="display:inline-block; width:300px">
                  <div style="width: 100%; border-bottom: #000 solid;">
                Juan José Gallardo Mendoza
            </div>
      
          
            Nombre y Firma del Programador de la Unidad Académica	


        </div>
    </div>									
</footer>

<main>
    <table border="1" cellpading="0" cellspacing="0" width="100%">

        @php($no=1);
        @foreach ( $registros as $registro )

        <tr>
            <td width="3%" align="center">{{ $no++ }}</td>
            <td width="5%" align="center">{{ $registro->created_at->timezone('America/Mexico_City')->format('d-m-Y') }}</td>
            <td width="20%">&nbsp;{{ $registro->usuario->nombre }}</td>
            <td width="4%" align="center">{{ $registro->usuario->tipo == "ALUMNO"?"X":"" }}</td>
            <td width="4%" align="center">{{ $registro->usuario->tipo == "ADMINISTRATIVO"?"X":"" }}</td>
            <td width="4%" align="center">{{ $registro->usuario->tipo == "DOCENTE"?"X":"" }}</td>
            <td width="4%" align="center">{{ $registro->usuario->tipo == "EXTERNO"?"X":"" }}</td>
            <td width="4%" align="center">{{ $registro->created_at->timezone('America/Mexico_City')->format('H:i') }}</td>
            <td width="4%" align="center">{{ $registro->ended_at->timezone('America/Mexico_City')->format('H:i') }}</td>
            <td width="4%" align="center">{{ $registro->usuario->grupo }}</td>
            <td width="5%" align="center">{{ $registro->ip }}</td>
            <td width="20%" align="center">{{ $registro->actividad }}</td>
            <td width="4%" align="center">X</td>
            <td width="4%"></td>
            <td width="7%"></td>
        </tr>
                
        @endforeach
    </table>
</main>


</body>
</html>