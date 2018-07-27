<?php

$proyecto = '/PersonalPro/';
$ruta = "/PersonalPro/vista/exito.php";
define("CARPETA_PRINCIPAL", __DIR__);

define("CARPETA_ARCHIVOS", $proyecto . 'archivos/');
define("CARPETA_RECURSOS", $proyecto . 'vista/');
define("CARPETA_IMG", $proyecto . 'img/');
define("RUTA_PRINCIPAL", $rutaPrincipal);
define("RUTA_TER", $rutaTer);
define("USUARIO_AUTENTICAR", array('url' => $rutaPrincipal . 'PersonalPro/usuario/autenticar', 'controlador' => 'UsuarioControlador', 'metodo' => 'autenticar'));
define("MENU_ADMINISTRADOR", array('url' => $rutaPrincipal . '/menu', 'controlador' => 'MenuControlador', 'metodo' => 'index'));
define("USUARIO_INGRESAR", array('url' => $rutaPrincipal . '/usuario/iniciarsesion', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexIniciar'));
define("USUARIO_REGISTRAR", array('url' => $rutaPrincipal . '/usuario/registrar', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexRegistrar'));
define("USUARIO_CONSULTAR", array('url' => $rutaPrincipal . '/usuario/consultar', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexConsultar'));
define("CONSULTAR_PERFIL", array('url' => $rutaPrincipal . '/usuario/consultarperfil', 'controlador' => 'UsuarioControlador', 'metodo' => 'indexInicio'));
define("USUARIO_GUARDAR", array('url' => $rutaPrincipal . '/usuario/guardar', 'controlador' => 'UsuarioControlador', 'metodo' => 'guardar'));
define('CERRAR_SESION', array('url' => $rutaPrincipal . '/index', 'controlador' => 'UsuarioControlador', 'metodo' => 'CerrarSesion'));
define('CONSULTAR_USUARIO_ESPECIFICO', array('url' => $rutaPrincipal . '/usuario/consultar/especifico', 'controlador' => 'UsuarioControlador', 'metodo' => 'UsuarioEspecifico'));

define("CONSULTAR_PERMISO_INDEX", array('url' => $rutaPrincipal . '/menu/consultarpermiso', 'controlador' => 'UsuarioControlador', 'metodo' => 'consultarPermisoIndex'));
define("CONSULTAR_PERMISO", array('url' => $rutaPrincipal . '/menu/consultarpermiso/consulta', 'controlador' => 'UsuarioControlador', 'metodo' => 'consultarPermiso'));

//Rutas De Usuario
define("MENU_USUARIO", array('url' => $rutaPrincipal . '/menuUsuario', 'controlador' => 'MenuControlador', 'metodo' => 'indexUsuario'));
define("PERMISO_USUARIO", array('url' => $rutaPrincipal . '/Permiso', 'controlador' => 'Usuario_PermisoControlador', 'metodo' => 'indexPermiso'));
define("CONSULTA_PERMISO_USUARIO", array('url' => $rutaPrincipal . '/Consulta/Permisos', 'controlador' => 'MenuControlador', 'metodo' => 'consultarPermiso'));
//Rutas Administrador
define("INSERTAR_PERMISO", array('url' => $rutaPrincipal . '/menuPermiso', 'controlador' => 'Usuario_PermisoControlador', 'metodo' => 'usuarioPermiso'));
define("CAMBIO_ESTADO_PERMISO", array('url' => $rutaPrincipal . '/menu/permiso/estado', 'controlador' => 'Usuario_PermisoControlador', 'metodo' => 'cambio_estado_permiso'));


define("USUARIO_REGISTRAR_NOTICIAS_INDEX", array('url' => $rutaPrincipal . '/usuario/registrarnoticias', 'controlador' => 'NoticiasControlador', 'metodo' => 'indexRegistrarNoticias'));
define("USUARIO_REGISTRAR_NOTICIAS", array('url' => $rutaPrincipal . '/usuario/registrarnoticias/guardar', 'controlador' => 'NoticiasControlador', 'metodo' => 'registrarNoticias'));
define("USUARIO_ACTUALIZAR_NOTICIAS", array('url' => $rutaPrincipal . '/usuario/actualizarnoticias', 'controlador' => 'NoticiasControlador', 'metodo' => 'actualizarNoticias'));
define("USUARIO_CONSULTAR_NOTICIAS_INDEX", array('url' => $rutaPrincipal . '/usuario/consultarnoticias', 'controlador' => 'NoticiasControlador', 'metodo' => 'indexConsultarNoticias'));
define("USUARIO_CONSULTAR_NOTICIAS", array('url' => $rutaPrincipal . '/usuario/consultarnoticias/consulta', 'controlador' => 'NoticiasControlador', 'metodo' => 'consultarNoticias'));
