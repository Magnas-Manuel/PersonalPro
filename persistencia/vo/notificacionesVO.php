<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

/**
 * Description of notificaciones
 *
 * @author LocalHost
 */
class notificacionesVO implements IGenericoVO {

    private $id_notificacion;
    private $id_usuario;
    private $fecha_inicio;
    private $tipo_notificacion;

    function getId_notificacion() {
        return $this->id_notificacion;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getTipo_notificacion() {
        return $this->tipo_notificacion;
    }

    function setId_notificacion($id_notificacion) {
        $this->id_notificacion = $id_notificacion;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setTipo_notificacion($tipo_notificacion) {
        $this->tipo_notificacion = $tipo_notificacion;
    }

    public function getAtributos() {
        ;
        $atributos = array();
        $atributos['id_notificacion'] = $this->id_notificacion;
        $atributos['id_usuario'] = $this->id_usuario;
        $atributos['fecha_inicio'] = $this->fecha_inicio;
        $atributos['tipo_notificion'] = $this->tipo_notificacion;
        return $atributos;
    }
    

    public function convertir($info) {
        ;
    }

}
