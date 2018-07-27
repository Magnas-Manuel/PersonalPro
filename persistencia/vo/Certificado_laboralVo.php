<?php

namespace persistencia\Vo;

use persistencia\Generico\IGenericoVo;

class Certificado_laboralVo implements IGenericoVo {

    private $id_certificado_laborales;
    private $descripcion;
    private $fecha_solicitud;
    private $fecha_entrega;
    private $id_estado_certificado;
    private $id_usuario;

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        //El estandar es Cer = certificado 
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['Cer_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['Cer_' . $nombreAtributo];
            }
        }
    }

    public function getAtributos() {
        $info = array();
        $info['id_certificado_laborales'] = $this->id_certificado_laborales;
        $info['descripcion'] = $this->descripcion;
        $info['fecha_solicitud'] = $this->fecha_solicitud;
        $info['fecha_entrega'] = $this->fecha_entrega;
        $info['id_estado_certificado'] = $this->id_estado_certificado;
        $info['id_usuario'] = $this->id_usuario;
        return $info;
    }

}
