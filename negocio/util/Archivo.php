<?php

namespace negocio\util;

use persistencia\vo\UsuarioVO;
use const CARPETA_PRINCIPAL;
use const RUTA_PRINCIPAL;

class Archivo {

    public static function moverArchivos($nombre) {
        $nombreFinal = '';
        if (isset($_FILES[$nombre])) {
            $foto = $_FILES[$nombre];
            $ext = str_replace('image/', '', $foto['type']);
            $nombreFinal = round(microtime(TRUE) * 1000) . '_' . rand(0, 1000) . '.' . $ext;
            $ruta = CARPETA_PRINCIPAL . '/noticias/' . $nombreFinal;
            move_uploaded_file($foto['tmp_name'], $ruta);
        }
        return $nombreFinal;
    }

    public static function moverContrato($nombre, $id) {
        $nombreFinal = '';
        if (isset($_FILES[$nombre])) {
            $foto = $_FILES[$nombre];
            $ext = str_replace('application/', '', $foto['type']);
            $nombreFinal = round($id . microtime(TRUE) * 1000) . '_' . rand(0, 1000) . '.' . $ext;
            $ruta = CARPETA_PRINCIPAL . '/contrato/' . $nombreFinal;
            move_uploaded_file($foto['tmp_name'], $ruta);
        }
        return $nombreFinal;
    }

//contrato
    public static function cookies($info) {
        if (isset($_COOKIE[$info])) {
            $infoUsuario = json_decode($_COOKIE['usuario'], TRUE);
            $usuario = new UsuarioVO();
            $usuario->setIdUsuario($infoUsuario['id_usuario']);
            $usuario->setRuta_foto($infoUsuario['ruta_foto']);
            $usuario->setNombre($infoUsuario['nombre']);
            $usuario->setApellido($infoUsuario['apellido']);
            $usuario->setNombre_usuario($infoUsuario['nombre_usuario']);
            $_SESSION['usuario'] = $usuario;
            if ($usuario->getId_tipo_usuario() == 1) {
                header('location: ' . MENU_ADMINISTRADOR['url']);
                return;
            } else {
                header('location: ' . MENU_USUARIO['url']);
                return;
            }
        }
    }

}
