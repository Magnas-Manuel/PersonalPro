<?php

$rutaPrincipal = "/PersonalPro/index.php";
$rutaTer = "/PersonalPro/logout.php";
require_once './autoload.php';
require_once './ruta.php';

use negocio\util\Archivo;
//print_r($_COOKIE);
if (!isset($_SERVER['PATH_INFO'])) {

    Archivo::cookies('usuario');
    include_once './vista/inicioVista.php';
    return;
}

use persistencia\basedatos\Conexion;

$cnn = Conexion::conectar();
$url = $rutaPrincipal . $_SERVER['PATH_INFO'];

foreach (get_defined_constants() as $constante) {
    if (!is_array($constante)) {
        continue;
    }
    if ($url == $constante['url']) {
        $clase1 = '\\negocio\\controlador\\' . $constante['controlador'];
        $obj = new $clase1($cnn);
        $metodo = $constante['metodo'];
        $obj->$metodo();
        break;
    }
}
//switch ($url) {
//    case USUARIO_AUTENTICAR['url']:
//        $controlador = new PropietarioControlador();
//        $controlador ->metodo();
//        break;
//}


//require_once './autoload.php';
//if (!isset($_SERVER['PATH_INFO'])) {
//    return;
//}
//
//use persistencia\basedatos\Conexion;
//
//$cnn = Conexion::conectar();
//$url = $_SERVER['PATH_INFO'];
//
//switch ($url) {
//    case "/usuario/autenticar":
//        echo 'OLEEE';
//        break;
//}





//use persistencia\dao\PropietarioDAO;
//use persistencia\vo\PropietarioVO;
//
//$propietario = new PropietarioVO;
//$propietario->setIdPropietario(1);
//$propietario->setNombre('Diego');
//$propietario->setApellido('Rey');
//$propietario->setCorreo('leoreyb');
//$propietario->setClave('123');
//$propietarioDAO = new PropietarioDAO($cnn);
//$resultado = $propietarioDAO->eliminar(1);
//print_r($resultado);
