<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\Dao\PermisoDao;
use persistencia\Vo\PermisoVo;
use const CARPETA_PRINCIPAL;

class Usuario_PermisoControlador extends GenericoControlador {

    /**
     * 
     * @var PermisoDao
     */
    protected $PermisoDao;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->PermisoDao = new PermisoDao($cnn);
    }

    public function indexPermiso() {
        $permiso = new PermisoDao($this->cnn);
        $listatipopermiso = $permiso->tipo_permiso();
        include_once CARPETA_PRINCIPAL . '/vista/SolicitarPermiso.php';
    }

    public function usuarioPermiso() {
        $permisoVo = new PermisoVo();
        $permisoVo->convertir($_POST);

        $id_usuario = $_SESSION['usuario'];
        $permisoVo->setId_usuario($id_usuario->getIdUsuario());
        $permisoVo->setId_estado_permiso(1);

        $permisoDao = new PermisoDao($this->cnn);
        $permisoDao->insertar($permisoVo);
//        $insertarPermiso = new PermisoDao($cnn);
        echo 'solicitud Enviada  !!';
    }

    public function cambio_estado_permiso() {
        $id_permiso = $_POST['per_id_permiso'];
        $id_estado = $_POST['per_id_estado_permiso'];
        $permisoDao = new PermisoDao($this->cnn);
        $resultado = $permisoDao->cambio_estado($id_permiso, $id_estado);
        return $resultado;
    }


}
