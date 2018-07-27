<?php

namespace persistencia\basedatos;

use PDO;

class Conexion {

    public function conectar() {
        $cnn = new PDO('mysql:host=den1.mysql6.gear.host;dbname=personalpro;', 'personalpro', 'Xb5Bq!vpGK-9');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }

}
