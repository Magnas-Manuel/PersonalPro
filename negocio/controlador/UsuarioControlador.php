<?php

namespace negocio\controlador;

use Exception;
use negocio\excepciones\PersonalProExcepcion;
use negocio\generico\GenericoControlador;
use negocio\util\Archivo;
use negocio\util\Validacion;
use persistencia\Dao\ContratoDao;
use persistencia\Dao\NoticiasDao;
use persistencia\Dao\Usuario_CargoDao;
use persistencia\Dao\Usuario_EstadoDao;
use persistencia\Dao\UsuarioDAO;
use persistencia\Vo\ContratoVo;
use persistencia\Vo\NoticiasVo;
use persistencia\Vo\Usuario_CargoVo;
use persistencia\Vo\Usuario_EstadoVo;
use persistencia\vo\UsuarioVO;
use const CARPETA_PRINCIPAL;
use const RUTA_PRINCIPAL;

class UsuarioControlador extends GenericoControlador {

    /**
     * 
     *  @var UsuarioDAO
     */
    private $usuarioDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->usuarioDAO = new UsuarioDAO($cnn);
        $this->noticiaDAO = new NoticiasDao($cnn);
    }

    public function guardar() {
        header('Content-Type: application/json');
        $respuesta = array();
        try {
            $this->cnn->beginTransaction();
            $usuario = new UsuarioVO();
            $usuario->convertir($_POST);
            //  $inser = Envio_Correo::enviarcorreo($usuario);
            $ruta_foto = Archivo::moverArchivos('usu_ruta_foto');
            $usuario->setRuta_foto($ruta_foto);
            $id_usuario = $this->usuarioDAO->insertar($usuario);
            //se inserta un usuario---------------------
            $usuario_estado = new Usuario_EstadoVo();
            $usuario_estado->convertir($_POST);
            $usuario_estado->setId_usuario($id_usuario);
            $usuarioDao = new Usuario_EstadoDao($this->cnn);
            $usuarioDao->insertar($usuario_estado);
//            //se insertar un usuario Cargo----------------
            $usuario_cargo = new Usuario_CargoVo();
            $usuario_cargo->convertir($_POST);
            $usuario_cargo->setId_usuario($id_usuario);
            $usuario_CargoDao = new Usuario_CargoDao($this->cnn);
            $usuario_CargoDao->insertar($usuario_cargo);
//            //se inserta Contrato ---------------------------
            $contrato = new ContratoVo();
            $contrato->convertir($_POST);
            $ruta_contrato = Archivo::moverContrato('usu_ruta_contrato', $id_usuario);
            $contrato->setId_usuario($id_usuario);
            $contrato->setRuta_contrato($ruta_contrato);
            $contratoDao = new ContratoDao($this->cnn);
            $contratoDao->insertar($contrato);
            $this->cnn->commit();
            $respuesta['codigo'] = 1;
            $respuesta['mensaje'] = 'Registro exitoso';
        } catch (PersonalProExcepcion $e) {
            $respuesta['codigo'] = -1;
            $respuesta['mensaje'] = 'Error al Registrar';
//            $respuesta['mensaje'] = ($e->getMessage());
        } catch (Exception $e) {
            $respuesta['codigo'] = -2;
            $this->cnn->rollBack();
            $respuesta['mensaje'] = "error " . $e->getMessage();
        }
        echo json_encode($respuesta);
    }

    public function autenticar() {
        header('Content-Type: application/json');
        $respuesta = array();
        $nombre_usuario = $_POST['usu_nombre_usuario'];
        $clave = $_POST['usu_clave'];
        $autenticar = $this->usuarioDAO->autenticar($nombre_usuario, $clave);
        if (is_null($autenticar)) {
            $respuesta['codigo'] = -1;
            $respuesta['mensaje'] = "Error en usuario o contraseña";
            echo json_encode($respuesta);
            return;
        }
        //var_dump($tiempo);//saber el valor de una variable
        if (isset($_POST['usu_recordarme'])) {
            $info = json_encode($autenticar->getAtributos());
            $tiempo = (time() + 1 ) + (60 * 60 * 24 * 365);
            setcookie('usuario', $info, $tiempo, RUTA_PRINCIPAL);
        }

        if ($autenticar->getId_tipo_usuario() == 1) {
            $_SESSION['usuario'] = $autenticar;
            $respuesta['codigo'] = 1;
            $respuesta['url'] = MENU_ADMINISTRADOR['url'];
        } else if ($autenticar->getId_tipo_usuario() == 2) {
            $_SESSION['usuario'] = $autenticar;
            $respuesta['codigo'] = 1;
            $respuesta['url'] = MENU_USUARIO['url'];
        }
        echo json_encode($respuesta);
    }

    public function CerrarSesion() {
        setcookie('usuario', NULL, -1);
        session_unset();
        session_destroy();
        header('location: ' . RUTA_PRINCIPAL);
    }

    public function indexRegistrar() {
        $usuarioDao = new UsuarioDAO($this->cnn);
        $listaeps = $usuarioDao->Consultar_eps();
        $listatipousuario = $usuarioDao->Consultar_tipo_usuario();
        $listatipodocumento = $usuarioDao->Consultar_tipo_documento();
        $contratoDao = new ContratoDao($this->cnn);
        $listacontrato = $contratoDao->consultar_contrato();
        $cargodao = new Usuario_CargoDao($this->cnn);
        $listacargo = $cargodao->consultar_cargo();
        include_once CARPETA_PRINCIPAL . '/vista/registrarUsuario.php';
    }

    public function indexConsultar() {
        $usuarioDAO = new UsuarioDAO($this->cnn);
        $listaUsuario = $usuarioDAO->indexConsultar();
        include_once CARPETA_PRINCIPAL . '/vista/consultarUsuario.php';
    }

    public function UsuarioEspecifico() {

        header('Content-Type: application/json');
        $numeroDoc = $_POST['busqueda'];
        $consultaUsuario = new UsuarioDAO($this->cnn);
        $resultado = $consultaUsuario->Consultar_usuario($numeroDoc);
        echo json_encode($resultado);

        //include_once '';
    }

    public function indexIniciar() {
        include_once CARPETA_PRINCIPAL . '/vista/iniciosesion.php';
    }

    public function indexInicio() {
        include_once CARPETA_PRINCIPAL . '/vista/inicio.php';
    }

    public function mostrarFoto() {
        
    }

    public function consultarPermisoIndex() {
         $consultar = new UsuarioDAO($this->cnn);
         $listaestado = $consultar->Consultar_estado_permiso();
        include_once CARPETA_PRINCIPAL . '/vista/consultarPermisos.php';
    }
    public function consultarPermiso() {
        $consultar = new UsuarioDAO($this->cnn);
        $listaPermisos = $consultar->Consultar_Permiso();
        header('Content-Type:application/json');
        echo json_encode($listaPermisos);
    }

}
