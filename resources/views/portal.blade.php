<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
      html,body{
        height:100%;
        padding:0;
        margin:0;
      }
      .oc{
        display:table;
        width:100%;
        height:100%;
      }
      .ic{
        display:table-cell;
        vertical-align:middle;
        height:100%;
      }
      form{
        display:block;
        background:#FFF;
        border:2px solid #234176;
        padding:0 0 25px 0;
        width:500px;
        font-family:helvetica,sans-serif;
        font-size:14px;
        margin:10px auto;
      }
      .fel,.fer,.fec{
        text-align:center;
        width:350px;
        margin:0 auto;
        padding:10px;
        display: flex;
        justify-content: space-evenly;
      }
      .fel{
        text-align:left;
      }
      .fer{
        text-align:right;
      }
      h1{
        font-weight:bold;
        font-size:21px;
        margin:0;
        padding:20px 10px;
        text-align:center;
      }
      p{
        margin:15px auto;
        width:75%;
        text-align:left;
      }
      ul{
        margin:15px auto;
        width:75%;
      }
      h2{
        margin:25px 10px;
        font-weight:bold;
        text-align:center;
      }
      label,h2{
        font-size:16px;
      }
      .logo{
        background:#005ee5 center 25px url(%%IMAGE:logo_cecyteg%%) no-repeat;
        padding-top:180px;
      }
      
      select, input
      {
        
        margin: auto;
        width: 250px;
      }
      
      label
      {
        width: 100px;
      }
      
      button
      {
        width: 100px;
        height: 50px;
      }
      
      h1, h2
      {
        color: white;
      }
      button
      {
        border-radius: 20px;
        width: 150px;
        background-color: #005ee5;
        color: white;
        border-color: white;
        
      }
      
    </style>
    <title>
      Firewall Authentication
    </title>
  </head>
  <body>
    <div class="oc">
      <div class="ic">
        <form action="%%AUTH_POST_URL%%" method="post" id="formulario">
          <input type="hidden" name="%%REDIRID%%" id="hf_url" value="http://10.10.10.10/">
          <input type="hidden" name="%%MAGICID%%" value="%%MAGICVAL%%">
          <input type="hidden"  name="%%USERNAMEID%%"  id="ft_un">
          <input name="%%PASSWORDID%%"  value="cecyteg" id="ft_pd" type="hidden">
          <h1 class="logo" id="mensaje">
            Ingresa tus credenciales para acceder a internet
          </h1>
          <h2>
            %%QUESTION%%
          </h2>
          
          <div class="fel">
            <label for="ft_actividad">
              Actividad:
            </label>
            <select id="ft_actividad">

            </select>


          </div>
          <div class="fel">
            
            <label>
              Duración
            </label>
            <select id="ft_duracion" >
              <option  value="alumno_50">
                1 módulo (50 minutos)
              </option>
              
              <option value="alumno_100">
                2 módulos (100 minutos)
              </option>
              
              <option value="alumno_150">
                3 módulos (150 minutos)
              </option>
              
            </select>
            <br>
          </div>
          
          
          <div class="fel">
            <label for="ft_usuario">
              Usuario:
            </label>
            <input id="ft_usuario" type="text" autocorrect="off" autocapitalize="off">
            <a target="_blank" href="http://10.10.10.10:8000/busqueda">buscar</a>
          </div>
          
          
          <div class="fel">
            <label for="ft_password">
              Password:
            </label>
            <input id="ft_password" type="password" autocorrect="off" autocapitalize="off">
          </div>
          <div class="fer">
            <button id="btn_enviar" >
              Enviar
            </button>
          </div>
        </form>
        
      </div>
    </div>
    
    <script>

    var actividades = [];
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault();
        
        let usuario = document.getElementById("ft_usuario").value;
        let password = document.getElementById("ft_password").value;
        let duracion = document.getElementById("ft_duracion").value;
        let actividad = document.getElementById("ft_actividad").value;
     
        document.getElementById("mensaje").innerHTML = "Autenticando....";
        document.getElementById("btn_enviar").disabled = true;
        fetch('http://10.10.10.10:8000/api/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          }
          ,
          body: JSON.stringify({
            usuario,
            password, 
            duracion,
            actividad
          })
        }).then(async response => {
            document.getElementById("btn_enviar").disabled = false;
            const data = await response.json();

            if (!response.ok) 
            {
                throw new Error(data.message || 'Error desconocido');
            }
            return data;
        }
        )
        .then(data => {

            const actividad = document.getElementById("ft_actividad").value;
            const item = actividades.find(x => x.nombre === actividad);
            if(item && item.url !=null)
            {
              document.getElementById("hf_url").value = item ? item.url : "";
            }
            console.log(item);

            if(data.tipo == 'ADMINISTRATIVO')
            { 
                document.getElementById("ft_un").value ="personal";
                document.getElementById("ft_password").value=data.codigo;
            }
            else
            {
                document.getElementById("ft_un").value =duracion;
                document.getElementById("ft_pd").value=data.codigo;
            }

            document.getElementById("formulario").submit();

        })
        .catch(error => {
          document.getElementById("mensaje").innerHTML=error;
          
        });
        

        
    });

    function cargarActividades()
    {
      fetch('http://10.10.10.10:8000/api/actividades', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json'
          }
        })
        .then(async response => {
          document.getElementById("btn_enviar").disabled = false;
          const data = await response.json();

          if (!response.ok) 
          {
              throw new Error(data.message || 'Error desconocido');
          }
          return data;
        }
      )
      .then(data => {
        let ft_actividad = document.getElementById("ft_actividad");

        ft_actividad.addEventListener("change", (event)=>{
          console.log(event.target.actividad);
        });


        for(const item of data)
        {
          const opcion  = document.createElement("option");
          opcion.value  = item.id; 
          opcion.innerHTML = item.nombre + " " + (item.grupo ?? "");

          ft_actividad.append(opcion);
        }

        actividades=data;

        
      })
      .catch(error => {
        document.getElementById("mensaje").innerHTML=error;
        
      });
    }

    cargarActividades();




    setInterval(()=>{
      location.href = "http://10.10.10.10/";
    }, 250000);

    </script>
  </body>
</html>