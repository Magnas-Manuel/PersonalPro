<?php

namespace persistencia\Dao;

use persistencia\Generico\GenericoDao;

class Certificado_laboralDao extends GenericoDao {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'certificado_laborales');
    }

}
