<?php

namespace persistencia\Dao;

use PDO;
use persistencia\generico\GenericoDAO;

class PermisoDao extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'permiso');
    }

    public function tipo_permiso() {
        $sqlConsulta = 'select * from tipo_permiso';
        $sentenciaConsulta = $this->cnn->prepare($sqlConsulta);
        $resultadoConsulta = $sentenciaConsulta->execute();
        $filasConsulta = $sentenciaConsulta->fetchAll(\PDO::FETCH_OBJ);
        return $filasConsulta;
    }

    public function cambio_estado($id_permiso, $id_estado) {
        $sql = 'UPDATE permiso SET id_estado_permiso = :id_estado where id_permiso = :id_permiso';
        $sentenciaConsulta = $this->cnn->prepare($sql);
        $sentenciaConsulta->bindParam(':id_estado', $id_estado);
        $sentenciaConsulta->bindParam(':id_permiso', $id_permiso);
        $resultadoConsulta = $sentenciaConsulta->execute();

        return $resultadoConsulta;
    }

    public function consultarpermiso($id_permiso) {

//        print_r($id_permiso);
        $sql = 'select per.id_permiso,usu.nombre,usu.apellido,per.descripcion,tipo.tipo_permiso,fecha_inicio,fecha_fin,esta.estado from permiso as per 
            inner join estado_permiso as esta on per.id_estado_permiso = esta.id_estado 
            inner join tipo_permiso as tipo on tipo.id_tipo_permiso = per.id_tipo_permiso
            inner join usuario as usu on usu.id_usuario = per.id_usuario where  per.id_usuario = :id_permiso';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->bindParam( ':id_permiso',$id_permiso);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }

}
