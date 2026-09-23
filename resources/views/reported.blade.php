<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @page {
        margin: 200px 25px 70px 25px; /* top, right, bottom, left */
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;
    }
    header {
        position: fixed;
        top: -160px;
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

    .sin-borde
    {
        border: none !important;     
        padding: 0;                 
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
        background-color: #0047a9;
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
        <th width="85%" align="center">REGISTRO DE HORAS PRÁCTICA EN LABORATORIOS, TALLERES Y CENTROS DE CÓMPUTO</th>
        <th  width="7%" align="center">
            CÓDIGO: <br>
            FO236-004/D
        </th>
    </tr>
</table>
<div align="left">

<table width="100%" class="sin-borde" >
    <tr class="sin-borde">
        <td width="80%"  class="sin-borde">Unidad<br> Académica: <u>Pénjamo</u></td>
        <td  class="sin-borde">
            <table width="100px"  class="sin-borde">
                <tr  class="sin-borde">
                    <td  align="right" class="sin-borde">Laboratorio: </td>
                    <td ></td>
                </tr>
                    
                <tr>
                    <td  align="right" class="sin-borde">Taller: </td>
                    <td></td>
                </tr>
                <tr>
                    <td  align="right" class="sin-borde">Centro de cómputo</td>
                    <td>X</td>
                </tr>
            
            </table>

        </td>
    </tr>
</table>
<table   class="sin-borde"  border="0" cellpading="0" cellspacing="0" width="100%">
        <tr  class="sin-borde"  >
            <th class="sin-borde" height="30px" colspan="3" class="sin-borde"></th>
            <th colspan="4" class="cabecera"> Para llenado exclusivo de Tallerista, Laboratorista y/o docente</th>
            <th class="sin-borde" colspan="9"</th>
        </tr>
</table>

<table border="1" cellpadding="0" cellspacing="0" width="100%">
    <tr class="cabecera">
        <th width="2%" rowspan="2" style="height: 40px;" align="center">No.</th>
        <th width="4%" rowspan="2" align="center">Fecha</th>
        <th width="17%" rowspan="2" align="center">Nombre del usuario</th>
        <th width="6%" rowspan="2" align="center">Semestre</th>
        <th width="6%" rowspan="2" align="center">Grupo</th>
        <th width="7%" rowspan="2" align="center">Carrera</th>
        <th width="7%" rowspan="2" align="center">
            UAC, Asignatura, Módulo o Submódulo
        </th>

        <th colspan="4" align="center">Tipo de usuario</th>

        <th width="16%" rowspan="2" align="center">
            Actividad o nombre de la práctica
        </th>
        <th width="5%" rowspan="2" align="center">Hora de entrada</th>
        <th width="5%" rowspan="2" align="center">Hora de salida</th>
        <th width="5%" rowspan="2" align="center">No. Equipo de Cómputo</th>
        <th width="9%" rowspan="2" align="center">Observaciones</th>
    </tr>

    <tr>
        <th width="3%" align="center">ES</th>
        <th width="3%" align="center">DOC</th>
        <th width="3%" align="center">AD</th>
        <th width="3%" align="center">EX</th>
    </tr>
</table>
</div>
</header>

<footer>

    <div style="position: absolute; top: -40px; left: 420px;">
        <img
            src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/firma.png'))) }}"
            alt="Firma"
            style="width:135px;"
        >
    </div>

    <div style="width:100%; text-align:center;">
        <div style="display:inline-block; width:300px;">

            <div style="width:100%; border-bottom:#000 solid 1px;">
                Juan José Gallardo Mendoza
            </div>

            Nombre y Firma del Programador de la Unidad Académica

        </div>
    </div>

</footer>

<main>

    <table border="1" cellpadding="0" cellspacing="0" width="100%">

        @php($no = 1)

        @foreach ($registros as $registro)

            <tr>

                {{-- No. --}}
                <td width="2%" align="center">
                    {{ $no++ }}
                </td>

                {{-- Fecha --}}
                <td width="4%" align="center">
                    {{ $registro->created_at
                        ->timezone('America/Mexico_City')
                        ->format('d-m-Y') }}
                </td>

                {{-- Nombre del usuario --}}
                <td width="17%">
                    &nbsp;{{ $registro->usuario->nombre }}
                </td>

                {{-- Semestre --}}
                <td width="6%" align="center">

                </td>

                {{-- Grupo --}}
                <td width="6%" align="center">
                    {{ $registro->usuario->grupo  }}
                </td>

                {{-- Carrera --}}
                <td width="7%" align="center">

                </td>

                {{-- UAC / Asignatura / Módulo / Submódulo --}}
                <td width="7%" align="center">
                </td>

                {{-- Tipo de usuario --}}
                <td width="3%" align="center">
                    {{ $registro->usuario->tipo == 'ALUMNO' ? 'X' : '' }}
                </td>

                <td width="3%" align="center">
                    {{ $registro->usuario->tipo == 'DOCENTE' ? 'X' : '' }}
                </td>

                <td width="3%" align="center">
                    {{ $registro->usuario->tipo == 'ADMINISTRATIVO' ? 'X' : '' }}
                </td>

                <td width="3%" align="center">
                    {{ $registro->usuario->tipo == 'EXTERNO' ? 'X' : '' }}
                </td>

                {{-- Actividad --}}
                <td width="16%">
                    {{ $registro->actividad->nombre ?? '' }}
                </td>

                {{-- Hora de entrada --}}
                <td width="5%" align="center">
                    {{ $registro->created_at
                        ->timezone('America/Mexico_City')
                        ->format('H:i') }}
                </td>

                {{-- Hora de salida --}}
                <td width="5%" align="center">
                    {{ $registro->ended_at
                        ? $registro->ended_at
                            ->timezone('America/Mexico_City')
                            ->format('H:i')
                        : '' }}
                </td>

                {{-- No. Equipo --}}
                <td width="5%" align="center">
                    {{ $registro->ip ?? '' }}
                </td>

                {{-- Observaciones --}}
                <td width="9%">
    
                </td>

            </tr>

        @endforeach

    </table>

</main>


</body>
</html>