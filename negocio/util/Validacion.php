<?php

namespace negocio\util;

use negocio\excepciones\PersonalProExcepcion;

class Validacion {

    public static function obligatorio($valor, $mensaje) {
        if (empty($valor)) {
            throw new PersonalProExcepcion($mensaje);
        }
    }

}
