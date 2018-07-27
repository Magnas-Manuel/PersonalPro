<?php

namespace persistencia\Dao;

use persistencia\generico\GenericoDAO;
use persistencia\vo\UsuarioVO;
use PDO;

class UsuarioDAO extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'usuario');
    }

    public function indexConsultar() {

        $sqlConsulta = 'Select id_usuario,nombre,apellido,numero_documento,
                     clave,nombre_usuario,direccion,fecha_nacimiento,genero,celular,
                                correo,nombre_eps, nombre_documento from usuario as Us
                                inner join Eps as E on Us.id_eps=E.id_eps 
                                inner join tipo_documento as D on Us.id_tipo_documento = D.id_tipo_documento';
        $sentenciaConsulta = $this->cnn->prepare($sqlConsulta);
        $resultadoConsulta = $sentenciaConsulta->execute();
        $filasConsulta = $sentenciaConsulta->fetchAll(\PDO::FETCH_OBJ);
        return $filasConsulta;
    }

    public function autenticar($nombre_usuario, $clave) {
        $sql = 'select * from usuario as us inner join usuario_estado as use on us.id_usuario = use.id_usuario '
                . ' where estado = true and nombre_usuario = :nombre_usuario and clave = :clave';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->bindParam(':nombre_usuario', $nombre_usuario);
        $sentencia->bindParam(':clave', $clave);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        if (empty($resultado)) {
            return;
        }
        $registro = $resultado[0];
        $usuario = new UsuarioVO;
        $usuario->setIdUsuario($registro['id_usuario']);
        $usuario->setNombre($registro['nombre']);
        $usuario->setApellido($registro['apellido']);
        $usuario->setNumero_documento($registro['numero_documento']);
        $usuario->setNombre_usuario($registro['nombre_usuario']);
        $usuario->setDireccion($registro['direccion']);
        $usuario->setFecha_nacimiento($registro['fecha_nacimiento']);
        $usuario->setGenero($registro['genero']);
        $usuario->setRuta_foto($registro['ruta_foto']);
        $usuario->setCelular($registro['celular']);
        $usuario->setCorreo($registro['correo']);
        $usuario->setId_eps($registro['id_eps']);
        $usuario->setId_tipo_documento($registro['id_tipo_documento']);
        $usuario->setId_tipo_usuario($registro['id_tipo_usuario']);
        return $usuario;
    }

    public function Consultar_eps() {
        $sql = 'Select * from eps';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

    public function Consultar_tipo_usuario() {
        $sql = 'Select * from tipo_usuario';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

    public function Consultar_tipo_documento() {
        $sql = 'Select * from tipo_documento';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

    public function Consultar_Permiso() {
        $sql = 'select per.id_permiso,usu.nombre,usu.apellido,per.descripcion,tipo.tipo_permiso,fecha_inicio,fecha_fin,esta.estado from permiso as per 
            inner join estado_permiso as esta on per.id_estado_permiso = esta.id_estado 
            inner join tipo_permiso as tipo on tipo.id_tipo_permiso = per.id_tipo_permiso
            inner join usuario as usu on usu.id_usuario = per.id_usuario where per.id_estado_permiso = 1 ';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

    public function Consultar_estado_permiso() {
        $sql = 'select * from estado_permiso ';
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }

    public function Consultar_usuario($busqueda) {


        $q = $this->cnn->quote($busqueda);
        $qc = substr($q, 1, -1);
        $total = "'%" . $qc . "%'";
        $query = "SELECT * FROM usuario WHERE nombre LIKE " . $total . " OR  numero_documento LIKE " . $total . "";

        $sentencia = $this->cnn->prepare($query);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(\PDO::FETCH_OBJ);
        return $resultado;
    }

}
