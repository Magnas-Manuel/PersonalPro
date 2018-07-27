var Personalpro = {
    init: function () {
        var parametros = {};

        $('button#btnConsulta ').on('click', Personalpro.consultar);

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

    }, consultar: function () {
        var id = $(this).attr('data-id');
        alert(id);
    }
};
Personalpro.init();

//function Ver() {
//    var id = $(this).attr('data-id');
//
//    var url = '/carcacha/index.php/menu/gestionar/carcacha/VER';
//    var parametro = {};
//    parametro.id = id;
//    Carcacha.peticion(url, parametro, Carcacha.reporte);
//}
//function Eliminar(e) {
//    var opcion = confirm("Desea Vender Este Carro");
//    if (opcion) {
//        var id = $(this).attr('data-id');
//        Carcacha.detener(e);
//        var url = '/carcacha/index.php/menu/gestionar/carcacha/eliminar';
//        var parametro = {};
//        parametro.id = id;
//        Carcacha.peticion(url, parametro, Carcacha.respuesta);
//    }
//}







