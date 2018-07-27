<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div >
            <center><h1>Permisos</h1></center>

            <table class="table table-responsive-lg  "  style="background-color: white; color: black; margin-top: 2em;"  >
                <thead>
                    <tr>
                        <!--<th>Permiso</th>-->
                        <th>Nombre Empleado</th>


                        <th>Tipo Permiso</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>


                    </tr>
                </thead>
                <tbody id="cuerpo1">
                        <tr>
                        </tr>
                </tbody>
            </table>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <form id="registroFormulario">
                            <div class="col-lg-12">


                                <br/>
                                <center><strong>Descripción del Permiso</strong></center>
                                <p id="descripcion" style="margin-left: 1em;margin-right: 1em;"></p>
                                <div id="id_descripcion"></div>
                                
                                
                                <br/>
                                <center><strong >Estado del Permiso </strong><br>
                                    <select class ="form-control col-lg-5" name="per_id_estado_permiso">
                                        <option value="">Seleccione una opción</option>
                                        <?php
                                        foreach ($listaestado as $camp) {
                                            ?>
                                            <option value="<?= $camp->id_estado ?>"> <?= $camp->estado ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <br/>
                                </center>


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>
        <script type="text/javascript">
            
            var mensaje = $('#mensajes');
            mensaje.hide('slow');
            $(document).on('submit', '#registroFormulario', function (e) {
            e.preventDefault;
                $.ajax({
                    type: 'POST',
                    url: '<?= CAMBIO_ESTADO_PERMISO['url'] ?>',
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
                        consultarPermisos();
                    }
                });
                return false;
            });

        </script>
    </body>
</html>
