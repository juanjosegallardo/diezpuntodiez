@php
    use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @page {
        margin: 25px 25px 70px 25px; /* top, right, bottom, left */
        font-size: 8px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }

    table,  tr,  td, th
    {
        border:  none;
        padding: 0;                  /* sin espacio interno */
        margin: 0;
    }

    td.campo
    {
        border-bottom: 1px solid #000;     
    
    }

    h1
    {
        font-size: 15px;
    }

    
    h2
    {
        font-size: 13px;
    }

    table.borde, table.borde tr, table.borde tr td,table.borde tr th
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
        <th  style="height: 20px;"  width="30%" align="left">
            <img  src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/cecyteg2.png'))) }}" alt="Logo" style="width:200px;">

        </th>
        <th  width="80%" align="left">
            <h1>CECyTE Guanajuato  </h1> 
		    <h2>Acta de Evaluación	</h2>

	
        </th>
   
    </tr>
</table>
<div style="border-top: 1px solid #000; width: 100%; margin: 10px 0;"></div>

<table width="100%" border="1" cellpading="0" cellspacing="0" >


    <tr>
        <td height="25px" width="15%"><b>Centro de trabajo:</b> </td>
        <td width="45%">11ETC0018L - Pénjamo</td>
        <td width="0%"></td>
        <td width="10%"><b>Turno:</b></td>
        <td width="30%">Matutino</td>
    </tr>

    <tr>
        <td height="25px"><b>Plan de estudios:</b></td>
        <td>{{ $grupo["especialidad"] }}</td>
        <td></td>
        <td><b>Generación:</b></td>
        <td>{{ $grupo["generacion"] }}</td>
   
    </tr>

    <tr>
        <td height="25px" ><b>Periodo Escolar:</b> </td>
        <td>Febrero 2026 - Julio 2026</td>
        <td></td>
        <td><b>Grupo:</b></td>
        <td>{{ $grupo["grupo"] }}</td>
    </tr>

    <tr>
        <td height="25px"><b>Asignatura: </b></td>
        <td> 

        {{ $materia }} - [p7]

        </td>
        <td></td>
        <td><b>Periodo:</b> </td>
        <td>Semestre {{ $grupo["semestre"] }}</td>
    </tr>
</table>
<br>

<table  border="0" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td colspan="2" style="border: solid #000 1px;" align="center">Extraordinario 2</td>
        </tr>
        <tr class="cabecera">
            <th width="6%">#</h>
            <th width="14%" >No. Control</th>
            <th align="left" width="60%">Nombre del alumno</h>
            <th width="10%">Oportunidad</th>
            <th width="5%"  style="border: solid #000 1px;" >E</th>
            <th width="5%"  style="border: solid #000 1px;">F</h>
            
        </tr>

    </table>

</div>
</header>

<main>
    <table border="0" cellpading="0" cellspacing="0" width="100%">

        @php($no=1);
        @foreach ( $registros as $registro )

        <tr style="border-bottom: solid #000 1px;">
            <td height="22px" align="center" width="6%">{{$no++  }}</td>
            <td width="14%" align="center">{{ $registro->usuario->usuario }}</td>
            <td width="60%">{{ $registro->usuario->nombre }}</td>
            <td width="10%" align="center">CR</td>
            <td style="border: solid #000 1px;" width="5%"></td>
            <td style="border: solid #000 1px;" width="5%"></td>


        </tr>
                
        @endforeach
    </table>


</main>
<br><br><br>
<footer>
    <br><br>
    <table border="0" width="100%" >
        <tr>
            <td>
                <div align="center" style="border-top: 1px solid #000; width: 100%; margin: 10px 0;">
                    {{ mb_strtoupper($profesor, 'UTF-8') }}

                    <br><br>
                    <b>TITULAR DE LA <br>ASIGNATURA</b>
                </div>
                
            </td>
            <td>
                <div align="center" style="border-top: 1px solid #000; width: 100%; margin: 10px 0;">
                    MAYRA ALEJANDRA PRIETO GUTIERREZ
                    <br><br>
                    <b>DIRECTORA DEL PLANTEL</b><br>&nbsp;

                </div>
            </td>
            <td>
                <div align="center" style="border-top: 1px solid #000; width: 100%; margin: 10px 0;">
                    ANAYELI ALCOCER SILVESTRE
                    <br><br>
                    <b>COORDINADORA DE <br>CONTROL ESCOLAR</b>

                </div>
                
            </td>
        </tr>
    </table>
</footer>


</body>
</html>