
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../vista/assets/images/1.png" type="image/x-icon">

        <title>Administrador</title>
        <!-- Bootstrap core CSS-->
        <link href="../vista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../vista/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../vista/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="../vista/css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top" >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <img src="<?= CARPETA_IMG ?>2.png" id="logo" width="320" height="70">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="margin-top: 5em;">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                        <a class="nav-link" href="index.html" id="menu">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Noticias">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages1" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Noticias</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages1">
                            <li>
                                <a href="<?= USUARIO_REGISTRAR_NOTICIAS_INDEX['url'] ?>" id="menu">Registrar Noticias</a>
                            </li>
                            <li>
                                <a href="<?= USUARIO_CONSULTAR_NOTICIAS_INDEX['url'] ?>" id="menu">Consultar Noticias</a>
                            </li>

                        </ul>
                    </li>
                    <!--        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                              <a class="nav-link" href="tables.html">
                                <i class="fa fa-fw fa-table"></i>
                                <span class="nav-link-text">Tables</span>
                              </a>
                            </li>-->

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Empleados">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-file"></i>
                            <span class="nav-link-text">Empleados</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                            <li>
                                <a href="<?= USUARIO_CONSULTAR['url'] ?>" id="menu">Consultar Empleado</a>
                            </li>
                            <li>
                                <a href="<?= USUARIO_REGISTRAR['url'] ?>" id="menu">Registrar Empleado</a>
                            </li>

                        </ul>
                    </li>
                    <!--permisos-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Permisos">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Permisos</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="<?= CONSULTAR_PERMISO_INDEX['url'] ?>" id="menu">Consultar Permisos</a>
                            </li>

                        </ul>
                    </li>
                    <!--certificados-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Certificados">
                        <a class="nav-link" href="../vista/NADA.php" id="menu">
                            <i class="fa fa-fw fa-link"></i>
                            <span class="nav-link-text">Certificados</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alertas
                                <span class="badge badge-pill badge-warning">6 Nuevas</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">Nuevas Alertas</h6>
                            <div class="dropdown-divider"></div>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">Alertas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                    <center>
                        <img  id="imagen" src="<?= CARPETA_ARCHIVOS . $usuario->getRuta_foto() ?> " width="30px" height="30px" style="border-radius: 100px;"/>
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <?= strtoupper($usuario->getNombre_usuario()) ?></a>
                    </center>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= CERRAR_SESION['url'] ?>">
                            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper" style="background-image: url(''); ">
            <div class="container-fluid">
                <div id="contenido" style="margin-top: 1em; ">
                    <?php
                    ?>

                </div>



            </div>
            <!-- Area Chart Example-->


            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>PERSONAL PRO 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->


            <!--Cerrar Sesion Modal-->

            <!-- Bootstrap core JavaScript-->
            <script src="../vista/vendor/jquery/jquery.min.js"></script>
            <script src="../vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vista/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->

            <script src="../vista/vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vista/vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../vista/js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="../vista/js/sb-admin-datatables.min.js"></script>
            <script src="../vista/js/sb-admin-charts.min.js"></script>
            <script type="text/javascript" src="../vista/js/jquery-3.3.1.min.js"></script>

        </div>
        <script type="text/javascript">


            $('a#menu ').on('click', eventoClick);
            function cargarVista(url) {
                $.get(url, procesarRespuesta);
            }
            function procesarRespuesta(html) {
                consultar();
                consultarPermisos();
                $('#contenido').empty().append(html);
            }
            function eventoClick(e) {
                detener(e);
                var vinculo = $(this);
                var url = vinculo.attr('href');
                cargarVista(url);
            }
            function detener(e) {
                if (e.preventDefault) {
                    e.preventDefault();
                }
                if (e.stopPropagation) {
                    e.stopPropagation();
                }
                if (e.returnValue) {
                    e.returnValue = false;
                }
            }
            $(function () {
                $('[data-toggle="popover"]').popover()
            });
            $(document).ready(function () {
                $("body").tooltip({selector: '[data-toggle=tooltip]'});
            });

            function consultar() {
                $.ajax({
                    'url': '<?= USUARIO_CONSULTAR_NOTICIAS['url'] ?>',
                    'type': 'POST',
                    'data': {},
                    success: function (respuesta) {
                        var cuerpo = $('#cuerpo');//tabla-tbody
                        cuerpo.empty();
                        for (var i = 0; i < respuesta.length; i++) {
                            var item = respuesta[i];
                            var fila = "<tr>";
                            fila += "<td>" + item.descripcion + "</td>" + "<td>" + item.fecha_inicio + "</td>" + "<td>" + item.fecha_fin + "<td>" + item.ruta + "</td>";
                            fila += "<td> <input type='button' data-info='" + JSON.stringify(item) + "' data-toggle='modal' data-target='#myModales' class='btn btn-warning' value='Modificar'/></td></tr>";
                            cuerpo.append(fila);
                        }
                        //
                        $('tbody input').on('click', function (e) {
                            var data = $(this).attr('data-info');
                            var persona = JSON.parse(data);
                            $('#descripcion').val(persona.descripcion);
                            $('#fecha_inicio').val(persona.fecha_inicio);
                            $('#fecha_fin').val(persona.fecha_fin);
                            $('#id_noticia').val(persona.id_noticia);
                            $('#id_usuario').val(persona.usuario);
                            $('#ruta_foto').val(persona.ruta);
                        });

                    }
                });
            }

            function consultarPermisos() {
                $.ajax({
                    'url': '<?= CONSULTAR_PERMISO['url'] ?>',
                    'type': 'POST',
                    'data': {},
                    success: function (respuesta) {
                        var cuerpo = $('#cuerpo1');//tabla-tbody
                        cuerpo.empty();
                        for (var i = 0; i < respuesta.length; i++) {
                            var item = respuesta[i];
                            var fila = "<tr>";
                            fila += "<td>" + item.nombre + " " + item.apellido +"</td>" + "<td>" + item.tipo_permiso + "</td>" + "<td>" + item.fecha_inicio + "<td>" + item.fecha_fin + "</td>";
                            fila += "<td>" + item.estado + "</td>";
                            fila += "<td><button style='margin-left: 2px' class='nav-link btn btn-warning' data-toggle='modal' id='btnConsulta' data-info='" + JSON.stringify(item) + "' data-target='#exampleModal'> <i class='fa fa-fw fa-address-book'></i>Responder</button></td>";
                            fila += "</tr>";
                            cuerpo.append(fila);
                        }
                        //
                        $('tbody button').on('click', function (e) {
                            var data = $(this).attr('data-info');
                            var persona = JSON.parse(data);
                            $('#descripcion').empty().html(persona.descripcion);
                            $('#exampleModalLabel').empty().html('Empleado : '+persona.nombre + "" + persona.apellido);
                            $('#id_descripcion').empty().html('<input type = "hidden" name="per_id_permiso" value=" ' + persona.id_permiso + ' " /> ');
                        });
                        

                    }
                });
            }
        </script>
    </body>

</html>




