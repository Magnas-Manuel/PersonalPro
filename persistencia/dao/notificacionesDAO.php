<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;

/**
 * Description of notificacionesDAO
 *
 * @author LocalHost
 */
class notificacionesDAO extends GenericoDAO {

    
    public function __construct(&$cnn) {
        parent::__construct($cnn, 'notificaciones');
    }
    public function notificacion() {
        $sql="select * from notificaciones";
    }

}
