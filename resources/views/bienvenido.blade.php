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
      div.form{
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
      a
      {
        color: white !important;
        text-decoration: none;
      }
      
    </style>
    <title>
      Firewall Authentication
    </title>
  </head>
  <body>
    <div class="oc">
      <div class="ic">
        <div class="form" action="%%AUTH_POST_URL%%" method="post" id="formulario">
          <h1 class="logo" id="mensaje">
            Bienvenido, tu registro se realizó correctamente
          </h1>
          <h2>
            ya puedes continuar con tu actividad
          </h2>
          
          
          
          <div class="fer">
            <button id="btn_enviar"  onclick="continuar()">
             
                Continuar
              
            </button>
          </div>
        </form>
        
      </div>
    </div>
    
  </body>
  <script>

    function continuar()
    {
      
        btn_enviar.disabled = true;
        fetch('http://10.10.10.10:8000/api/registro', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json'
          }
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

          if(data && data.url)
          {
            location.href=data.url;
          }
          else
          {
            location.href="http://10.10.10.10";
          }

        })
        .catch(error => {
          location.href="http://10.10.10.10";
          
        });
    }
 
  </script>
</html> 