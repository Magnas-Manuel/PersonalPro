<?php

namespace persistencia\Dao;

use persistencia\generico\GenericoDAO;

class ContratoDao extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'contrato');
    }

    public function consultar_contrato() {
        $sql = 'select * from tipo_contrato';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

}
