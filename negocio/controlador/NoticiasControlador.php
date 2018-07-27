<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use negocio\util\Archivo;
use persistencia\Dao\NoticiasDao;
use persistencia\Dao\UsuarioDAO;
use persistencia\Vo\NoticiasVo;
use PHPMailer\PHPMailer\Exception;
use const CARPETA_PRINCIPAL;

class NoticiasControlador extends GenericoControlador {

    /**
     * 
     *  @var NoticiasDAO
     */
    private $noticiaDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->noticiaDAO = new NoticiasDao($cnn);
        $this->usuarioDAODAO = new UsuarioDAO($cnn);
    }

    public function indexRegistrarNoticias() {
        include_once CARPETA_PRINCIPAL . '/vista/registrarNoticias.php';
    }

    public function indexActualizarNoticias() {
        include_once CARPETA_PRINCIPAL . '/vista/inicio.php';
    }

    public function indexConsultarNoticias() {

        include_once CARPETA_PRINCIPAL . '/vista/consultarNoticias.php';
    }

    public function consultarNoticias() {
        $noticiaDao = new NoticiasDao($this->cnn);
        $listanoticias = $noticiaDao->consultarNoticias();
        header('Content-Type:application/json');
        echo json_encode($listanoticias);
    }

    public function registrarNoticias(){
        try {
            $usuario = $_SESSION['usuario'];
            $id = $usuario->getIdUsuario();
            $noticiaVO = new NoticiasVo();
            $noticiaVO->convertir($_POST);
            $rutaFoto = Archivo::moverArchivos('not_foto_tmp');
            $noticiaVO->setRuta_foto($rutaFoto);
            $noticiaVO->setId_usuario($id);
            $this->noticiaDAO->insertar($noticiaVO);
            $array['codigo'] = 1;
            $array['mensaje'] = 'Exito al registrar';
            
        } catch (Exception $ex) {
            $array['codigo'] = -1;
            $array['mensaje'] = 'Error al registrar';
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function actualizarNoticias() {
        $noticiaDao = new NoticiasDao($this->cnn);
        $resultado = $noticiaDao->actualizar();
    }

}
