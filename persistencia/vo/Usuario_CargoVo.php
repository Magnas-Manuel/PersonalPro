<?php

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;

class Usuario_CargoVo implements IGenericoVo {

    private $fecha_inicio;
    private $fecha_fin;
    private $id_usuario;
    private $id_cargo;
    private $salario_mensual;

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_cargo() {
        return $this->id_cargo;
    }

    function getSalario_mensual() {
        return $this->salario_mensual;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setSalario_mensual($salario_mensual) {
        $this->salario_mensual = $salario_mensual;
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
        $info['fecha_inicio'] = $this->fecha_inicio;
        $info['fecha_fin'] = $this->fecha_fin;
        $info['id_usuario'] = $this->id_usuario;
        $info['id_cargo'] = $this->id_cargo;
        $info['salario_mensual'] = $this->salario_mensual;
        return $info;
    }

}
