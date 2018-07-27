<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?= CARPETA_RECURSOS ?>css/bootstrap.min.css"/>
        <link href="<?= CARPETA_RECURSOS ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/bootstrap.min.js"></script>
        <style>
            body{
                font-size: 12px;
            }
            /**
             * se aplica el ancho, margen centrado
             * borde de un pixel con redondeado, y rellenado
             * a la izquierda y derecha
             */
            #Contenedor1{
                width: 400px;
                margin: 50px auto;
                background-color: #F3EDED;
                border: 1px solid #ECE8E8;
                height: 400px;
                border-radius:8px;
                padding: 0px 9px 0px 9px;
            }

            /**
             * Aplicando al icono de usuario el color de fondo,
             * rellenado de 20px y un redondeado de 120px en forma
             * de un circulo
             */
            /**
             * Se aplica al contenedor madre un margen de tamaño 10px hacia la cabecera y pie,
             * color de fuente blanco,un tamaño de fuente 50px y texto centrado.
             */
            .Icon1{
                margin-top: 10px;
                margin-bottom:10px; 
                color: #FFF;
                background-color: #000;
                font-size: 50px;
                text-align: center;
            }
            /**
             * Se aplica al contenedor donde muestra en el pie
             * la opción de olvidaste tu contraseña?
             */
            .opcioncontra{
                text-align: center;
                margin-top: 20px;
                font-size: 14px;
            }

            /**
             * En las siguientes lineas
             * se define el diseño adaptable, para que
             * se muestre en los dispositivos móviles
             */

            /******************************************/
            /***    DISEÑO PARA MOVILES 320        ****/
            /******************************************/
            @media only screen and (max-width:320px){
                #Contenedor1{
                    width: 100%;
                    height: auto;
                    margin: 0px;
                }

                /******************************************/
                /***    DISEÑO PARA MOVILES 240        ****/
                /******************************************/
                @media only screen and (max-width:240px){

                }
            }
        </style>
    </head>
    <body>
        <div id="Contenedor1">
            <div class="Icon1">
                <!--Icono de usuario-->
                <img src="<?= CARPETA_IMG ?>2.jpg" style="height:90px; width:90px; border-radius: 50px;" alt=""/>
            </div>
            <div class="ContentForm">
                <form action="<?= USUARIO_INICIO['url']?>" method="post">
                    <div style="padding-bottom: 40px;">
                        <h2 align="center">Registro exitoso</h2>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Ir a la página principal</button>
                </form>
            </div>	
        </div>
        
    </body>
</html>
