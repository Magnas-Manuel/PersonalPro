<?php

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;

class PermisoVo implements IGenericoVo {

    private $id_permiso;
    private $fecha_inicio;
    private $fecha_fin;
    private $id_estado_permiso;
    private $id_tipo_permiso;
    private $id_usuario;
    private $descripcion;

    function getDescripcion() {
        return $this->descripcion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getId_permiso() {
        return $this->id_permiso;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getId_estado_permiso() {
        return $this->id_estado_permiso;
    }

    function getId_tipo_permiso() {
        return $this->id_tipo_permiso;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_permiso($id_permiso) {
        $this->id_permiso = $id_permiso;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setId_estado_permiso($id_estado_permiso) {
        $this->id_estado_permiso = $id_estado_permiso;
    }

    function setId_tipo_permiso($id_tipo_permiso) {
        $this->id_tipo_permiso = $id_tipo_permiso;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        //El estandar es Per = Permiso 
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['per_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['per_' . $nombreAtributo];
            }
        }
    }

    public function getAtributos() {
        $info = array();
        $info['id_permiso'] = $this->id_permiso;
        $info['fecha_inicio'] = $this->fecha_inicio;
        $info['fecha_fin'] = $this->fecha_fin;
        $info['id_estado_permiso'] = $this->id_estado_permiso;
        $info['id_tipo_permiso'] = $this->id_tipo_permiso;
        $info['id_usuario'] = $this->id_usuario;
        $info['descripcion'] = $this->descripcion;
        return $info;
    }

}
