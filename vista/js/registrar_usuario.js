
var registra = {
    init: function () {
        $('#formularioregistrar').on('submit', registra.registrar);
    },
    peticion: function (url, parametro, metodo) {
        $.ajax({
            'url': url,
            'type': 'POST',
            'data': parametro,
            'enctype': 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function (respuesta) {
                metodo(respuesta);
            },
            error: function (respuesta) {
                console.log(respuesta);
            }



        });
    }, detener: function (e) {
        if (e.preventDefault) {
            e.preventDefault();
        }
        if (e.stopPropagation) {
            e.stopPropagation();
        }
        if (e.returnValue) {
            e.returnValue = false;
        }
    }, registrar: function (e) {
        registra.detener(e);
        var url = '/PersonalPro/index.php/usuario/guardar';
        registra.peticion(url, new FormData(this), registra.respuesta);
    }, respuesta: function (respuesta) {

        if (respuesta.codigo === 1) {
            var mensaje = $('#mensaje');
            mensaje.addClass('alert-success');
            mensaje.show('slow');
            mensaje.fadeOut(2000);
            mensaje.empty().html(respuesta.mensaje);
            registra.limpiarcajas();
            return;
        }
        if (respuesta.codigo === -1) {
            var mensaje = $('#mensaje');
            mensaje.addClass('alert-danger');
            mensaje.show('slow');
            mensaje.fadeOut(2000);
            mensaje.empty().html(respuesta.mensaje);
            return;
        }
        if (respuesta.codigo === -2) {
            console.log(respuesta.mensaje);
            return;
        }

    }, limpiarcajas: function () {

        $('#usu_nombre').val('');
        $('#usu_apellido').val('');
        $('#usu_id_tipo_documento').val('');
        $('#usu_numero_documento').val('');
        $('#usu_id_eps').val('');
        $('#usu_direccion').val('');
        $('#usu_fecha_nacimiento').val('');
        $('#usu_genero').val('');
        $('#usu_ruta_foto').val('');
        $('#usu_celular').val('');
        $('#usu_correo').val('');
        $('#usu_id_cargo').val('');
        $('#usu_id_tipo_contrato').val('');
        $('#usu_id_tipo_usuario').val('');
        $('#usu_fecha_inicio').val('');
        $('#usu_fecha_fin').val('');
        $('#usu_ruta_contrato').val('');
        $('#usu_salario_mensual').val('');

    }
};
registra.init();


