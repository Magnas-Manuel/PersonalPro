<?php

namespace persistencia\basedatos;

use PDO;

class Conexion {

    public function conectar() {
        $cnn = new PDO('pgsql:host=den1.mysql6.gear.host;dbname=personalPpro;', 'personalpro', 'Xb5Bq!vpGK-9');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }

}
