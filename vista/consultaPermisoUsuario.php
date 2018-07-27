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
        <script src="js/peticion.js" type="text/javascript"></script>
    </head>
    <body
        <input type="text" name="busqueda" id="busqueda">
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
            <tbody >
                <?php foreach ($resultado as $value) { ?>
                    <tr>

        <!--                            <td ><?= $value->id_permiso ?></td>-->
                        <td ><?= $value->nombre . " " ?><?= $value->apellido ?></td>

                        <td ><?= $value->tipo_permiso ?></td>
                        <td ><?= $value->fecha_inicio ?></td>
                        <td ><?= $value->fecha_fin ?></td>
                        <td ><?= $value->estado ?></td>


                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </body>
</html>
