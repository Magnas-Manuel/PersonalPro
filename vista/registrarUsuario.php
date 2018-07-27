<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar Usuario</title>
        <link href="<?= CARPETA_RECURSOS ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?= CARPETA_RECURSOS ?>vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="vista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vista/css/creative.min.css" rel="stylesheet">

        <style>
            .header {
                color: #36A0FF;
                font-family: TIMES NEW ROMAN;
                font-size: 27px;
                padding: 10px;
            }
            body{
                background-image: url('');
            }
        </style>
    </head>
    <body>

    <center><h1><p>Registrar Usuario</p></h1></center>

    <form class="form-inline" id="formularioregistrar" >

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7  text-center"><label class="">Nombre</label></span>
            <div class="col-md-12"> 
                <p>
                    <input type="text" id="usu_nombre" name="usu_nombre" class="form-control" >
                <p>
            </div>
            <span id="id1"></span>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Apellido</label></span>
            <div class="col-md-12">
                <p>
                    <input type="text" id="usu_apellido" name="usu_apellido" class="form-control" >
                </p>
            </div>
            <span id="id2"></span>
        </div>
        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Tipo Documento</label></span>
            <div class="col-md-12 ">
                <p>
                    <select name="usu_id_tipo_documento" id="usu_id_tipo_documento" class="form-control">
                        <option value="">Seleccionar Tipo Documento</option>

                        <?php
                        foreach ($listatipodocumento as $camp) {
                            ?>
                            <option value="<?= $camp['id_tipo_documento'] ?>"> <?= $camp['nombre_documento'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Numero Documento</label></span>
            <div class="col-md-12">
                <p>
                    <input type="number" id="usu_numero_documento" name="usu_numero_documento" class="form-control" >
                </p>
            </div>
            <span id="id3"></span>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Tipo Eps</label></span>
            <div class="col-md-12">
                <p>
                    <select name="usu_id_eps" id="usu_id_eps" class="form-control">
                        <option value="">Seleccionar Eps</option>

                        <?php
                        foreach ($listaeps as $campo) {
                            ?>
                            <option value="<?= $campo['id_eps'] ?>"><?= $campo['nombre_eps'] ?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Dirección</label></span>
            <div class="col-md-12">

                <input type="text" id="usu_direccion" name="usu_direccion" class="form-control" placeholder="Direccion">
                </p>
            </div>

            <span id="id4"></span>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Fecha nacimiento</label></span>
            <div class="col-md-12">
                <p>
                    <input type="date" id="usu_fecha_nacimiento" name="usu_fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                <p>
            </div>
        </div>


        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Genero</label></span>
            <div class="col-md-12">
                <p>
                    <select name="usu_genero" id="usu_genero" class="form-control">                           
                        <option value="">Seleccionar Genero</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                <p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Seleccionar Foto</label></span>
            <div class="col-md-6">
                <p>
                    <input type="file" id="usu_ruta_foto" name="usu_ruta_foto" class="form-control" >
                </p>
            </div>
        </div>


        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Número de celular</label></span>
            <div class="col-md-12">
                <p>
                    <input type="number" id="usu_celular" name="usu_celular" class="form-control">
                </p>

            </div>
        </div>


        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Correo</label></span>
            <div class="col-md-12">
                <p>
                    <input type="email" id="usu_correo" name="usu_correo" class="form-control" >
                </p>
            </div>
            <span id="id5"></span>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Roll</label></span>
            <div class="col-md-12">
                <p>
                    <select name="usu_id_tipo_usuario" id="usu_id_tipo_usuario" class="form-control">
                        <option value="">Seleccionar Roll</option>
                        <?php foreach ($listatipousuario as $value) { ?>
                            <option value="<?= $value['id_tipo_usuario'] ?>"><?= $value['nombre_usuario'] ?></option>
                        <?php } ?>
                    </select>
                </p>
            </div>
        </div>



        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Cargo</label></span>
            <div class="col-md-12">
                <p>
                    <select name="usu_id_cargo" id="usu_id_cargo" class="form-control">
                        <option value="">Seleccionar Cargo</option>
                        <?php
                        foreach ($listacargo as $camp) {
                            ?>
                            <option value="<?= $camp['id_cargo'] ?>"> <?= $camp['nombre_cargo'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>


        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Tipo Contrato</label></span>
            <div class="col-md-7 col-lg-7 col-sm-7 col-xs-7">
                <p>
                    <select name="usu_id_tipo_contrato" id="usu_id_tipo_contrato" class="form-control">
                        <option value="">Seleccionar Tipo Contrato</option>                      
                        <?php
                        foreach ($listacontrato as $camp) {
                            ?>
                            <option value="<?= $camp['id_tipo_contrato'] ?>"> <?= $camp['nombre_contrato'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Fecha Inicio</label></span>
            <div class="col-md-12">
                <p>
                    <input type="date" id="usu_fecha_inicio" name="usu_fecha_inicio" class="form-control" >
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Fecha Fin</label></span>
            <div class="col-md-12">
                <p>
                    <input type="date" id="usu_fecha_fin" name="usu_fecha_fin" class="form-control" >
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Subir Contrato</label></span>
            <div class="col-md-12">
                <p>
                    <input type="file" id="usu_ruta_contrato" name="usu_ruta_contrato" class="form-control" >
                </p>
            </div>
        </div>

        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7 text-center"><label>Salario Mensual</label></span>
            <div class="col-md-12">
                <p>
                    <input type="number" id="usu_salario_mensual" name="usu_salario_mensual" class="form-control" >
                </p>
            </div>
        </div>
        <div class="form-group col-md-4">
            <span class="col-lg-7 col-sm-7 col-md-7 col-xs-7  text-center"></span>

            <div class="col-md-8">
                <p>

                    <input type="submit" value="Guardar" id="guardar" class="btn btn-success col-md-12 form-control">
                </p>
            </div>
            <div id="mensaje"></div>
        </div>

    </form>

</body>
<script src="<?= CARPETA_RECURSOS ?>js/registroUsuario.js" type="text/javascript"></script>
<script src="<?= CARPETA_RECURSOS ?>js/registrar_usuario.js" type="text/javascript"></script>

</html>


