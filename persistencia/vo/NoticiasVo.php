<?php

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;
use persistencia\vo\UsuarioVO;

class NoticiasVo implements IGenericoVo {

    private $id_noticia;
    private $descripcion;
    private $fecha_inicio;
    private $fecha_fin;
    private $ruta_foto;
    private $id_usuario;

    function getId_noticia() {
        return $this->id_noticia;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getRuta_foto() {
        return $this->ruta_foto;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_noticia($id_noticia) {
        $this->id_noticia = $id_noticia;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setRuta_foto($ruta_foto) {
        $this->ruta_foto = $ruta_foto;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        //El estandar es Not = noticias 
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['not_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['not_' . $nombreAtributo];
            }
        }
    }

    public function getAtributos() {
        $info = array();
        $info['id_noticia'] = $this->id_noticia;
        $info['descripcion'] = $this->descripcion;
        $info['fecha_inicio'] = $this->fecha_inicio;
        $info['fecha_fin'] = $this->fecha_fin;
        $info['ruta_foto'] = $this->ruta_foto;
        $info['id_usuario'] = $this->id_usuario;
        return $info;
    }

}
