<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar Noticias</title>

    </head>
    <body>
        <div>
            <center><h1 style="margin-bottom: 2em;">Registrar Noticias</h1></center>
            <form method="POST" id="formulario_registro_noticias" enctype="multipart/form-data">
                <div class="form-group  col-lg-4 col-sm-7 col-md-4 col-xs-2">
                    <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center">Fecha inicio</span>
                    <div class="">
                        <input type="date" id="not_fecha_inicio" name="not_fecha_inicio" class="form-control" >
                    </div>
                </div>
                <br />

                <div class="form-group  col-lg-4 col-sm-7 col-md-4 col-xs-2">
                    <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7  text-center">Fecha fin</span>
                    <div class=""> 

                        <input type="date" name="not_fecha_fin" id="not_fecha_fin" class="form-control" >
                    </div>
                </div>
                <br />

                <div class="form-group  col-lg-4 col-sm-7 col-md-4 col-xs-2">
                    <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7   text-center">Seleccionar foto</span>
                    <div class="">
                        <input type="file" id="not_foto_tmp"  name="not_foto_tmp" class="form-control" >
                    </div>
                </div>


                <div class="form-group col-md-12" style="margin-top: 2em;">
                    <span class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center">Descripción</span>
                    <div class="">
                        <textarea name="not_descripcion" id="not_descripcion" cols="138" rows="7"  class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-12 offset-4" style="margin-top: 2em;">
                    <button style="margin-top: 2em;" type="submit" class="btn btn-success col-md-4">Registrar </button>
                    <div id="mensaje" class="col-md-4 alert "> </div>
                </div>
            </form>

        </div>

    </body>
    <script type="text/javascript">
        var mensaje = $('#mensaje');
        mensaje.hide('slow');
        $(document).on('submit', '#formulario_registro_noticias', function () {
            $.ajax({
                type: 'POST',
                url: '<?= USUARIO_REGISTRAR_NOTICIAS['url'] ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (respuesta) {
                    mensaje.removeClass('alert-success');
                    mensaje.removeClass('alert-danger');
                    if (respuesta.codigo === 1) {
                        mensaje.addClass('alert-success');
                    } else {
                        mensaje.addClass('alert-danger');
                    }
                    mensaje.show('slow');
                    mensaje.fadeOut(3000);
                    mensaje.empty().html(respuesta.mensaje);
                }
            });
            return false;
        });
    </script>
</html>


