<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\Dao\PermisoDao;
use persistencia\Dao\UsuarioDAO;
use const CARPETA_PRINCIPAL;

class MenuControlador extends GenericoControlador {

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        parent::validarSesion();
    }

    public function index() {
        $usuario = $_SESSION['usuario'];
        if ($usuario->getId_tipo_usuario() == 1) {
            include_once CARPETA_PRINCIPAL . '/vista/menu.php';
        } else {
            include_once CARPETA_PRINCIPAL . '/vista/menuUsuario.php';
        }
    }

    public function indexUsuario() {
        $usuario = $_SESSION['usuario'];

        if ($usuario->getId_tipo_usuario() == 2) {

            include_once CARPETA_PRINCIPAL . '/vista/menuUsuario.php';
        } else {
            include_once CARPETA_PRINCIPAL . '/vista/menuUsuario.php';
        }
    }

    public function consultarPermisoUsuario() {
        $consultar = new UsuarioDAO($this->cnn);
        $id = $_SESSION['usuario']->getIdUsuario();
        $permisoDao = new PermisoDao($this->cnn);
        $resultado = $permisoDao->consultarpermiso($id);
        include_once CARPETA_PRINCIPAL . '/vista/consultaPermisoUsuario.php';
    }

}
