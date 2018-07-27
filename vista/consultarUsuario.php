
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?= CARPETA_RECURSOS ?>/js/peticion.js" type="text/javascript"></script>
        <script src="<?= CARPETA_RECURSOS ?>/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div >
            <center><h1>Empleados</h1></center>
           
            <input type="text" name="busqueda" id="busqueda">
            <table class="table table-responsive-lg  "  style="background-color: white; color: black; margin-top: 2em;"  >
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero de documento</th>
                        <th>Clave</th>
                        <th>Nombre Usuario</th>
                        <th>Direccion</th>
                        <th>Fecha De Nacimiento</th>
                        <th>Correo</th>
                      
                       

                    </tr>
                </thead>
                <tbody  id="resultado">
                    <?php foreach ($listaUsuario as $value) { ?>
                        <tr>

                            <td ><?= $value->nombre ?></td>

                            <td><?= $value->apellido ?></td>
                            <td><?= $value->numero_documento ?></td>
                            <td><?= $value->clave ?></td>
                            <td><?= $value->nombre_usuario ?></td>
                            <td><?= $value->direccion ?></td>

                            <td><?= $value->fecha_nacimiento ?></td>
                            <td><?= $value->correo ?></td>
                           

                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </body>

</html>




