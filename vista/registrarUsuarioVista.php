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
    </head>
    <body>
        <form id="registrarUsuario">
            <div>
                <label >Nombre</label>
                <input type="text" name="nombre" id="nombre" />
            </div>
            <div> 
                <label >Apellido</label>
                <input type="text" name="apellido" id="apellido" />
            </div>
            <div> 
                <label >Documento</label>
                <input type="number" name="documento" id="documento" />
            </div>

            <div> 
                <label >Direccion</label>
                <input type="text" name="direccion" id="direccion" />
            </div>
            <div> 
                <label >Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" />
            </div>
            <div> 
                <label >Genero</label>
                <input type="text" name="genero" id="genero" />
            </div>
            <div>
                <label >Celular</label>
                <input type="text" name="celular" id="celular" />
            </div>
            <div>
                <label >Correo</label>
                <input type="text" name="correo" id="correo" />
            </div>
            <div> 
                <label >EPS</label>
                <select name="EPS">
                    <option value="" name=""></option>
                    <option value="" name=""></option>
                    <option value="" name=""></option>
                </select>
            </div>

            <div> 
                <label >Tipo Documento</label>
                <select name="tipo_documento">
                    <option value="" name=""></option>
                    <option value="" name=""></option>
                    <option value="" name=""></option>
                </select>
            </div>
            <div> 
                <input type="submit" value="registrar">
            </div>

        </form>
    </body>
</html>
