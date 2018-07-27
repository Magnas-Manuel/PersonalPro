

var peticio = {
    inicio: function () {
        $('#busqueda').on('keyup', peticio.consulta);
    }, peticionajax: function (url, metodo, parametros) {
        $.ajax({
            "url": url,
            "type": 'POST',
            "data": parametros,
            success: function (respuesta) {

                metodo(respuesta);
            }, error: function (error) {
                console.log(error);
            }
        })
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

    }, consulta: function (e) {
        peticio.detener(e);
        var valorBusqueda = $(this).val();
        var parametros = {};
        parametros.busqueda = valorBusqueda;
        peticio.peticionajax('/PersonalPro/index.php/usuario/consultar/especifico', peticio.consultarespuesta, parametros);


    }, consultarespuesta: function (respuesta) {
//        var js = $.parseJSON(respuesta);
//        console.log(js);
        var items = '';
        for (var i = 0; i < respuesta.length; i++) {
            items += '<tr>';
            items += '<td>';
            items += respuesta[i].nombre;
            items += '</td>';
            items += '<td>';
            items += respuesta[i].apellido;
            items += '</td>';
            items += '<td>';
            items += respuesta[i].numero_documento;
            items += '</td>';
            items += '<td>';
            items += respuesta[i].clave;
            items += '</td>';
            items += '<td>';
            items += respuesta[i].nombre_usuario;

            items += '</td>';
            items += '<td>';
            items += respuesta[i].direccion;

            items += '</td>';
            
            items += '<td>';
            items += respuesta[i].fecha_nacimiento;

            items += '</td>';
            items += '<td>';
            items += respuesta[i].correo;
            items += '</td>';
           
            items += '<td>';
            items += '<button>Modificar</button>';
            items += '</td>';
        
            items += '</tr>';
        }
        $('#resultado').empty().empty().html(items);

    }






};
peticio.inicio();





//$(obtener_registros());
//
//function obtener_registros(usuario)
//{
//	$.ajax({
//		url : '/PersonalPro/index.php/usuario/consultar/especifico',
//		type : 'POST',
//		dataType : 'html',
//		data : { usuario: usuario },
//		})
//
//	.done(function(resultado){
////		$("#tabla_resultado").html(resultado);
//		console.log(resultado);
//	})
//}
//
//$(document).on('keyup', '#busqueda', function()
//{
//	var valorBusqueda=$(this).val();
//	if (valorBusqueda!="")
//	{
////            alert('hola');
//		obtener_registros(valorBusqueda);
//	}
//	else
//		{
//			obtener_registros();
//		}
//});
