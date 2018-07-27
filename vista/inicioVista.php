<!--<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Personal Pro</title>

         Bootstrap CSS 
        <link href="vista/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vista/css/creative.min.css" rel="stylesheet">


    </head>

    <body id="page-top" style="background-size: cover;background-image: url('https://cdn.pixabay.com/photo/2017/10/12/22/17/background-2846221_960_720.jpg');">

         Navigation 
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Personal Pro</a>
                <button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>

        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                fila 2 
                <div class="row">
                    <div class="col-lg-6 mx-auto">


                        <hr>
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <div style="border: 1px solid #f05f40 ; padding: 4em 4em 4em 4em ; border-radius: 5px; margin-left: 20px; margin-top: 5em;">

                            <div id="Contenedor"  >
                                <div >
                                    Icono de usuario
                                    <h3>Inicio Sesión </h3>
                                    <hr> 
                                </div>
                                <div class="ContentForm">
                                    <form action="<?= USUARIO_AUTENTICAR['url'] ?>" method="POST" name="FormEntrar">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input type="text"  name="usu_nombre_usuario" class="form-control" placeholder="Nombre Usuario" id="usu_nombre_usuario" aria-describedby="sizing-addon1" required>
                                        </div>
                                        <br>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password"  name="usu_clave" id="usu_clave" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
                                        </div>
                                        <br>
                                        <div class="input-group input-group-lg">
                                            <input type="checkbox" name="usu_recordarme" id="usu_recordarme" value="1"> Recordarme
                                        </div>
                                        <br>
                                        <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
                                        <div class="opcioncontra">
                                            <h5><a href="" style="color: white;">¿Olvidaste tu contraseña? </a></h5><br>
                                            <h5><a href="<?= USUARIO_REGISTRAR['url'] ?>" style="color: white;"> Registrar </a></h5>
                                        </div>
                                    </form>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

         Bootstrap core JavaScript 
        <script src="vista/vendor/jquery/jquery.min.js"></script>
        <script src="vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

         Plugin JavaScript 
        <script src="vista/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vista/vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vista/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

         Custom scripts for this template 
        <script src="vista/js/creative.min.js"></script>

    </body>

</html>-->
<!DOCTYPE html>
<html >
    <head>
        <!-- Site made with Mobirise Website Builder v4.7.8, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.7.8, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="vista/assets/images/1.png" type="image/x-icon">
        <meta name="description" content="">
        <title>Home</title>
        <link rel="stylesheet" href="vista/assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="vista/assets/tether/tether.min.css">
        <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="vista/assets/dropdown/css/style.css">
        <link rel="stylesheet" href="vista/assets/theme/css/style.css">
        <link rel="stylesheet" href="vista/assets/mobirise/css/mbr-additional.css" type="text/css">



    </head>
    <body>
        <section class=" menu cid-qVymFuTgd0" once="menu" id="menu1-6">



            <nav class="navbar beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color transparent">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">

                    <div class="navbar-brand">

                        <span class="navbar-caption-wrap"><center><a href="http://localhost/PersonalPro/index.php"><img src="<?= CARPETA_IMG ?>2.png" id="logo" width="320" height="70"></a>        </center></span>
                    </div>

                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                            <a class="nav-link link text-white display-4" href="http://localhost/PersonalPro/index.php">
                                Inicio
                            </a>
                        </li></ul>

                </div>
            </nav>
        </section>

        <section class="cid-qVykQIAA53 mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=Y5QdCrT0EbM" id="header2-3">

            <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

            <div class="container align-center">
                <div class="row justify-content-md-center">

                    <div class="col-lg-5 col-md-5  mbr-white">
                        <div style=" border: 2px solid #f05f40 ; padding: 2em 5em 0em 5em ; border-radius: 5px; margin-top: 3em;">

                            <div id="Contenedor">
                                <div>
                                    <h3>Inicio Sesión </h3>
                                    <hr> 
                                </div>
                                <div class="ContentForm">
                                    <form  method="POST" name="FormEntrar">
                                        <div class="">
                                            <h6>Nombre Usuario</h6>
                                            <input type="text" name="usu_nombre_usuario" class="form-control input-sm" placeholder="Nombre Usuario" id="usu_nombre_usuario" aria-describedby="sizing-addon1" required="">
                                        </div>
                                        <br>
                                        <div class="">
                                            <h6>Clave</h6>
                                            <input type="password" name="usu_clave" id="usu_clave" class="form-control input-sm" placeholder="Clave" aria-describedby="sizing-addon1" required="">
                                        </div>
                                        <br>
                                        <div id="mensaje"></div>

                                        <div class="input-group input-group-lg">
                                            <label class="checkbox">
                                                <input type="checkbox" name="usu_recordarme" id="usu_recordarme" value="1"> Recordarme
                                            </label>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary btn-block btn-signin col-md-9" id="IngresoLog" type="submit" >Entrar</button>

                                        <div class="opcioncontra">
                                            <h6><a href="" style="color: white;">¿Olvidaste tu contraseña? </a></h6><br>

                                        </div>
                                    </form>
                                </div>	
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>


        <script src="vista/assets/web/assets/jquery/jquery.min.js"></script>
        <script src="vista/assets/popper/popper.min.js"></script>
        <script src="vista/assets/tether/tether.min.js"></script>
        <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="vista/assets/dropdown/js/script.min.js"></script>
        <script src="vista/assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="vista/assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
        <script src="vista/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
        <script src="vista/assets/smoothscroll/smooth-scroll.js"></script>
        <script src="vista/assets/theme/js/script.js"></script>
        <script src="vista/js/sesion.js" type="text/javascript"></script>


    </body>
</html>
