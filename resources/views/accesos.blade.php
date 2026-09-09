<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php($aulas = [100=>"IP Mal Asignadas", 0=>"Intrusos sin acceso", 1=>"Aula A", 2=>"Aula B", 3=>"Inalámbricas CC", 10=>"?", 5=>"Taller"])
    <table border="1">
        <tr>
   
            <th>Año</th>
            <th>Mes</th>
            <th>Aula</th>
            <th>Total</th>
        </tr>
      @foreach ( $datos as  $dato)
        <tr>
            <td>{{ $dato["anio"] }}</td>
            <td>{{ $dato["mes"] }}</td>
            <td>{{ $aulas[$dato["tercer_octeto"]] }}</td>
            <td>{{ $dato["total"] }}</td>
        </tr>
      @endforeach
    </table>
</body>
</html>