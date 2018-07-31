alert('hola mundo');
var sesion = {
    init: function () {
        $('#IngresoLog ').on('click', sesion.inicio); //formulario InicioVista

    }, peticion: function (url, parametros, metodo) {
        $.ajax({
            "url": url,
            "type": 'POST',
            "data": parametros,
            success: function (respuesta) {
                metodo(respuesta);
            }, error: function (error) {
                console.log(error);
            }
        });
    }, detener: function (e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }
        if (e.preventDefault) {
            e.preventDefault();
        }
        if (e.returnValue) {
            e.returnValue = false;
        }

    }, inicio: function (e) {
        sesion.detener(e);
        var url = 'index.php/usuario/autenticar'; // para mas informacion en ruta.php
        var parametro = {};
        parametro.usu_nombre_usuario = $('#usu_nombre_usuario').val();//usu_nombre_usuario de la variable por post
        parametro.usu_clave = $('#usu_clave').val();//usu_clave de la variable por post
        sesion.peticion(url, parametro, sesion.respuesta);// ajax
    }, respuesta: function (respuesta) {
        $('#usu_clave').val('').html('');
        if (respuesta.codigo === 1) {
            window.location = respuesta.url;
            return;
        }
        //Cuando hay un error
        if (respuesta.codigo === -1) {
            var mensaje = $('#mensaje');
            mensaje.addClass('alert-danger');
            mensaje.show('slow');
            mensaje.fadeOut(3000);
            mensaje.empty().html(respuesta.mensaje);
            return;
        }
    }
};
sesion.init();












