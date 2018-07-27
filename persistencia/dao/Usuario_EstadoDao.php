<?php

namespace persistencia\Dao;

use persistencia\Generico\GenericoDao;

class Usuario_EstadoDao extends GenericoDao {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'usuario_estado');
    }

}
