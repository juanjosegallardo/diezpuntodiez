<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Generar Actas</h1>

 <form action="http://10.10.10.10:8000/aceptacion" target="_blank" method="GET">
    <label>Dia</label>
    <select name="dia">
        @for ($i=1;$i<=31;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>

    <label>Mes</label>
    <select name="mes">
        @for ($i=1;$i<=12;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>

    <label>Año</label>
    <select name="anio">
        @for ($i=2026;$i<=2030;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <br>
    <br>
    <label >actividad</label>
    <select name="actividad" id="actividad"></select>
    

    @php($grupos=[2801,2802,2803,2804,2805,2806,2807,2901,2902,2903,2904,2905,2906,3001,3002,3003,3004,3005,3006 ])
    
    <br>
    <br>

     <label >actividad</label>
    <select name="grupo">
        @foreach ($grupos as $grupo )
            <option value="{{ $grupo }}">{{ $grupo }}</option>
        @endforeach

    </select>
    <br>
    <br>
    <label >Profesor</label>
        @php($profesores = [
    "Angélica Gutiérrez Morales",
    "Blanca Rosa Troncoso Domínguez",
    "Cristina Guerrero Rodríguez",
    "David Zaragoza Torres",
    "Héctor Mejía Martínez",
    "Hortensia Espitia Rodríguez",
    "Jaime Hernández Calderón",
    "José Francisco González Alvarado",
    "José Luis Luévanos Barragán",
    "Julia Elena Núñez Soto",
    "Luis Miguel Orozco Guerrero",
    "Reynaldo Negrete Soto",
    "Octavio Ramírez Medel",
    "Roberto Baltazar Vázquez",
    "Salvador Cabrera Vázquez",
    "Víctor Manuel Zapién Piceno",
    "Jahaziel Cano Cendejas",
    "Jhony Walther Salinas Montejano",
    "Fátima Livier Rodríguez Guerrero",
    "Yadira Madrigal Rosales"
])
    <select name="profesor" >
        <option value=""></option>

        @foreach ($profesores as $profesor )
            <option value="{{ $profesor }}">{{ $profesor }}</option>
        @endforeach
        
    </select>
    <br>
    <br>
    <label>Documento</label>
    <select name="documento" >
        <option value="aceptacion">Aceptación</option>
        <option value="evaluacion">Acta de evaluación</option>
        
    </select>
    
    <br>
    <br>

    
    <input type="submit" value="GENERAR">
    
 </form>
 <script>
    function cargarActividades()
    {
      fetch('http://10.10.10.10:8000/api/actividades', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json'
          }
        })
        .then(async response => {
         
          const data = await response.json();

          if (!response.ok) 
          {
              throw new Error(data.message || 'Error desconocido');
          }
          return data;
        }
      )
      .then(data => {
        let ft_actividad = document.getElementById("actividad");
        for(const item of data)
        {
          const opcion  = document.createElement("option");
          opcion.value  = item.nombre;
          opcion.innerHTML =item.nombre;

          console.log(item);
          ft_actividad.append(opcion);
        }
      })
      .catch(error => {
        document.getElementById("mensaje").innerHTML=error;
        
      });
    }

    cargarActividades();
 </script>
</body>
</html>