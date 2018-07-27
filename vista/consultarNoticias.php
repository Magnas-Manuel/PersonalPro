
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div >
            <center><h1>Actualizar Noticias</h1></center>

            <table class="table table-responsive-lg  "  style="background-color: white; color: black; margin-top: 2em;"  >
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha fin</th>
                        <th>Ruta</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="cuerpo">
                    <tr>
                    </tr>
                </tbody>
            </table>

            <div class="modal fade" id="myModales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div id="mensaje" class="alert "></div>
                        <div class="modal-header" align="center">
                            <h4 class="modal-title" id="myModalLabel">Modificar Noticia</h4>
                        </div>
                        <div class="modal-body" id="registroActualizado">
                            <input type="hidden" id="id_noticia" class="form-control">
                            <br />
                            <input type="hidden" id="id_usuario" class="form-control">
                            <br />
                            <label>Descripcion </label>
                            <input type="text" id="descripcion" class="form-control">
                            <br />
                            <label>Fecha Inicio </label>
                            <input type="date" id="fecha_inicio" class="form-control">
                            <br />
                            <label>Fecha Fin </label>
                            <input type="date" id="fecha_fin" class="form-control">
                            <label>Ruta </label>
                            <input type="text"readonly="true" id="ruta_foto" class="form-control">
                        </div>
                        <div class="modal-footer" id="">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button id="btnModificar" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
    <script type="text/javascript">
        var mensaje = $('#mensaje');
        mensaje.hide('slow');
        $('#btnModificar').on('click', function (e) {
            e.preventDefault;
            var descripcion = $('#descripcion').val();
            var fecha_inicio = $('#fecha_inicio').val();
            var fecha_fin = $('#fecha_fin').val();
            var id_noticia = $('#id_noticia').val();
            var id_usuario = $('#id_usuario').val();
            var ruta_foto = $('#ruta_foto').val();
            $.ajax({
                'url': '<?= USUARIO_ACTUALIZAR_NOTICIAS['url'] ?>',
                'type': 'POST',
                'data': {'id_noticia': id_noticia, 'id_usuario': id_usuario, 'descripcion': descripcion, 'fecha_inicio': fecha_inicio, 'fecha_fin': fecha_fin, 'ruta_foto': ruta_foto},
                success: function (respuesta) {
                    mensaje.removeClass('alert-success');
                    mensaje.removeClass('alert-danger');
                    if (respuesta.codigo === 1) {
                        mensaje.addClass('alert-success');

                        $("div#form input[type='text'],div#form input[type='hidden']").val('');
                    } else {
                        mensaje.addClass('alert-danger');
                    }
                    mensaje.show('slow');
                    mensaje.fadeOut(3000);
                    mensaje.empty().html(respuesta.mensaje);
                    consultar();
                }

            });
        });

    </script>
</html>
