<?php

namespace persistencia\generico;

abstract class GenericoDAO {

    /**
     *
     * @var \PDO
     */
    protected $cnn;
    private $tabla;

    public function __construct(&$cnn, $tabla) {
        $this->cnn = $cnn;
        $this->tabla = $tabla;
    }

    public function insertar(IGenericoVO $obj) {
        $listaAtributos = $obj->getAtributos();
        $listaCampos = '';
        $listaValores = '';
        $info = array();
        foreach ($listaAtributos as $campo => $valor) {
            if (is_null($valor)) {
                continue;
            }
            $listaCampos .= ',' . $campo;
            $listaValores .= ',:' . $campo;
            $info[$campo] = $valor;
        }
        $sql = 'INSERT INTO ' . $this->tabla . ' (' . trim($listaCampos, ',') . ') VALUES(' . trim($listaValores, ',') . ')';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute($info);
        $array['codigo'] = 1;
        $array['mensaje'] = 'Exito al registrar';
        return $this->cnn->lastInsertId();
    }

    public function editar(IGenericoVO $obj, $condicion) {
        $listaAtributos = $obj->getAtributos();
        return $this->editarArray($listaAtributos, $condicion);
    }

    public function editarArray($array, $condicion) {
        $listaAtributos = $array;
        $listaCampos = '';
        $info = array();
        foreach ($listaAtributos as $campo => $valor) {
            if (is_null($valor)) {
                $listaCampos .= ', ' . $campo . " = NULL ";
                continue;
            }
            $listaCampos .= ', ' . $campo . "= :" . $campo;
            $info[$campo] = $valor;
        }
        $sql = ' UPDATE ' . $this->tabla . ' SET ' . trim($listaCampos, ',') . ' WHERE ' . $condicion;
        $sentencia = $this->cnn->prepare($sql);
        return $sentencia->execute($info);
    }

    public function eliminar($id) {
        $sql = ' DELETE FROM ' . $this->tabla . ' WHERE id_' . $this->tabla . ' = :id ';
        $sentencia = $this->cnn->prepare($sql);
        $info = array('id' => $id);
        return $sentencia->execute($info);
    }

}
