<?php

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;

class Usuario_EstadoVo implements IGenericoVo {

    private $id_usuario;
    private $id_tipo_usuario;
    private $estado;

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['usu_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['usu_' . $nombreAtributo];
            }
        }
    }

    public function getAtributos() {
        $info = array();
        $info['id_usuario'] = $this->id_usuario;
        $info['id_tipo_usuario'] = $this->id_tipo_usuario;
        $info['estado'] = $this->estado;
        return $info;
    }

}
