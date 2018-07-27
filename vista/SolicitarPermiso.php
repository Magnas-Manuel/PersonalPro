<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">


    </head>
    <body>
    <center><strong>SOLICITAR PERMISO</strong></center><br/>
    
        <form action="<?=INSERTAR_PERMISO['url']?>" method="POST">
            <div class="row">
                <div class="col-lg-12 mx-auto  form-group">
                    <textarea name="per_descripcion"  rows="15"  class="form-control"></textarea>
                </div>
                <div class="col-lg-3  form-group">
                    <strong>Tipo </strong>
                    <select class ="form-control" name="per_id_tipo_permiso">
                        <?php
                        foreach ($listatipopermiso as $camp) {
                            ?>
                            <option value="<?= $camp->id_tipo_permiso ?>"> <?= $camp->tipo_permiso ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-lg-3  form-group">
                    <strong>Fecha Inicio</strong>
                    
                    <input type="date" name="per_fecha_inicio" class="form-control">

                </div>
                <div class="col-lg-3  form-group">
                    <strong>Fecha Final</strong>
                    <input type="date" name="per_fecha_fin"  class="form-control">


                </div>
                <div class="col-lg-3  form-group">
                    <button class="btn btn-lg btn-primary btn-block btn-signin" style="margin-top: 1em;">Enviar</button>
                </div>
            </div>
        </form>
    </body>
</html>
