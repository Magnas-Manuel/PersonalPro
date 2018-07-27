<!--
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Personal Pro</title>

         Bootstrap CSS 
        <link href="../vista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vista/css/creative.min.css" rel="stylesheet">
        <script type="text/javascript" src="../vista/js/jquery-3.3.1.min.js"></script>


    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <img src="<?= CARPETA_IMG ?>2.png" id="logo" width="320" height="70">
                <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" id="menu">
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">Inicio  </a>
                          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?= USUARIO_CONSULTAR ['url'] ?>">Consultar Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?= PERMISO_USUARIO['url'] ?>">Solicitar Permiso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" ><?= strtoupper($usuario->getNombre_usuario()) ?></a>
                        </li>

                        <li class="nav-item">
                                                        <a class="nav-link js-scroll-trigger" href="#contact">Novedades</a>

                            <img  id="imagen" src="<?= CARPETA_ARCHIVOS . $usuario->getRuta_foto() ?> " width="50px" height="50px" style="border-radius: 100px;"/>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                fila 2 
                <div class="row">

                    <div id="contenido" class="col-lg-12 mx-auto">

                    </div>


                </div>
            </div>
        </div>
    </header>


     Bootstrap core JavaScript 
    <script src="../vista/vendor/jquery/jquery.min.js"></script>
    <script src="../vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     Plugin JavaScript 
    <script src="../vista/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vista/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vista/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

     Custom scripts for this template 
    <script src="../vista/js/creative.min.js"></script>
    <script type="text/javascript">

        $('div ul li a').on('click', eventoClick);
        function cargarVista(url) {
            $.get(url, procesarRespuesta);
        }
        function procesarRespuesta(html) {
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
    </script>
</body>

</html>

-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../vista/assets/images/1.png" type="image/x-icon">
        <title>Empleado</title>
        <!-- Bootstrap core CSS-->
        <link href="../vista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../vista/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../vista/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="../vista/css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
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
                        <a class="nav-link" href="../vista/NADA.php" id="menu">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Noticias</span>
                        </a>
                    </li>
                    <!--        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                              <a class="nav-link" href="tables.html">
                                <i class="fa fa-fw fa-table"></i>
                                <span class="nav-link-text">Tables</span>
                              </a>
                            </li>-->

                    <!--permisos-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Permisos">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Permisos</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="<?= PERMISO_USUARIO['url'] ?>" id="menu">Solicitar Permisos</a>
                            </li>
                            <li>
                                <a href="<?= CONSULTA_PERMISO_USUARIO['url'] ?>" id="menu">Consultar Permisos</a>
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
                        <a class="nav-link" href="<?=CERRAR_SESION['url']?>">
                            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div id="contenido" style="margin-top: 1em;">

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
<!--            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Seguro quiere Cerrar Sesión?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleccione el boton Cerrar Sesión.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary" href="">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Bootstrap core JavaScript-->
            <script src="../vista/vendor/jquery/jquery.min.js"></script>
            <script src="../vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vista/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../vista/vendor/chart.js/Chart.min.js"></script>
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
        </script>
    </body>

</html>




