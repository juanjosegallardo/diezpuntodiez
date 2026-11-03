(function() {

<<<<<<< HEAD
(async function(){

    const campo = document.getElementById('id_quizpassword');
    const contenedor = document.getElementById('id_passwordheadercontainer');
    const busqueda = document.querySelector('#page-navbar li')?.innerText.trim();
=======
    const campo = document.getElementById('id_quizpassword');
    const contenedor = document.getElementById('id_passwordheadercontainer');
    const busqueda = document.querySelector('#page-navbar li')?.innerText.trim();

>>>>>>> 53a0ee7355da0f46e07c70d09456b01ea2cb7937
    alert('{{ $parametros["test"] }}')
    claves = {
        @foreach ( $claves as $clave )
            '{{ $clave["codigo_materia"] }}' :'{{ $clave["codigo_examen"] }}',
        @endforeach

    }

<<<<<<< HEAD



=======
>>>>>>> 53a0ee7355da0f46e07c70d09456b01ea2cb7937
    if (campo != undefined) {
        campo.focus();
        if( claves[busqueda] == undefined )
        {
            alert('No se encontró la contraseña para el examen seleccionado');
        }
        else
        {
            
            document.querySelector('#page-navbar li');
            contenedor.classList.add('hide');
            const legendContrasena = document.querySelector('#id_passwordheader h3');
            legendContrasena.textContent = 'Contraseña agregada haz clic en iniciar intento';
            campo.value = claves[busqueda];
        }


    } 
    else
    {
        alert('Primero debes ingresar a un examen activo para poder obtener la contraseña');
    }
<<<<<<< HEAD

=======
>>>>>>> 53a0ee7355da0f46e07c70d09456b01ea2cb7937
})();
