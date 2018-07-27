<?php

namespace persistencia\Dao;

use persistencia\generico\GenericoDAO;

class Usuario_CargoDao extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'usuario_cargo');
    }

    public function consultar_cargo() {
        $sql = 'select * from cargo';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

}
