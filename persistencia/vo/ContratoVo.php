<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;

class ContratoVo implements IGenericoVo {

    private $id_contrato;
    private $fecha_inicio;
    private $fecha_fin;
    private $ruta_contrato;
    private $id_cargo;
    private $salario_mensual;
    private $id_usuario;
    private $id_tipo_contrato;
    

    function getId_contrato() {
        return $this->id_contrato;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getRuta_contrato() {
        return $this->ruta_contrato;
    }

    function getId_cargo() {
        return $this->id_cargo;
    }

    function getSalario_mensual() {
        return $this->salario_mensual;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_contrato($id_contrato) {
        $this->id_contrato = $id_contrato;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setRuta_contrato($ruta_contrato) {
        $this->ruta_contrato = $ruta_contrato;
    }

    function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    function setSalario_mensual($salario_mensual) {
        $this->salario_mensual = $salario_mensual;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
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
        $info['id_contrato'] = $this->id_contrato;
        $info['fecha_inicio'] = $this->fecha_inicio;
        $info['fecha_fin'] = $this->fecha_fin;
        $info['ruta_contrato'] = $this->ruta_contrato;
        $info['id_cargo'] = $this->id_cargo;
        $info['salario_mensual'] = $this->salario_mensual;
        $info['id_usuario'] = $this->id_usuario;
        $info['id_tipo_contrato'] = $this->id_tipo_contrato;
        return $info;
    }

}
