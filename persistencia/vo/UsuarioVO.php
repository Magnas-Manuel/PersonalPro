<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class UsuarioVO implements IGenericoVO {

    private $idUsuario;
    private $nombre;
    private $apellido;
    private $numero_documento;
    private $clave;
    private $nombre_usuario;
    private $direccion;
    private $fecha_nacimiento;
    private $genero;
    private $ruta_foto;
    private $celular;
    private $correo;
    private $id_eps;
    private $id_tipo_documento;
    private $id_tipo_usuario;
    private $lista_usuarios = array();
    function getId_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    function setId_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

        function getRuta_foto() {
        return $this->ruta_foto;
    }

    function setRuta_foto($ruta_foto) {
        $this->ruta_foto = $ruta_foto;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getNumero_documento() {
        return $this->numero_documento;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getGenero() {
        return $this->genero;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getId_eps() {
        return $this->id_eps;
    }

    function getId_tipo_documento() {
        return $this->id_tipo_documento;
    }

    function getLista_usuarios() {
        return $this->lista_usuarios;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setNumero_documento($numero_documento) {
        $this->numero_documento = $numero_documento;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setId_eps($id_eps) {
        $this->id_eps = $id_eps;
    }

    function setId_tipo_documento($id_tipo_documento) {
        $this->id_tipo_documento = $id_tipo_documento;
    }

    function setLista_usuarios($lista_usuarios) {
        $this->lista_usuarios = $lista_usuarios;
    }

    public function getAtributos() {
        $letraAleatoria = chr(rand(ord('A'), ord('Z')));
        $letraAleatoria2 = chr(rand(ord('A'), ord('Z')));
        $atributos = array();
        $atributos['id_usuario'] = $this->idUsuario;
        $atributos['nombre'] = $this->nombre;
        $atributos['apellido'] = $this->apellido;
        $atributos['numero_documento'] = $this->numero_documento;
        $atributos['clave'] = $letraAleatoria . rand(1, 999) . $letraAleatoria2 . rand(1, 999);
        $atributos['nombre_usuario'] = $this->nombre . rand(1, 999);
        $atributos['direccion'] = $this->direccion;
        $atributos['fecha_nacimiento'] = $this->fecha_nacimiento;
        $atributos['genero'] = $this->genero;
        $atributos['ruta_foto'] = $this->ruta_foto;
        $atributos['celular'] = $this->celular;
        $atributos['correo'] = $this->correo;
        $atributos['id_eps'] = $this->id_eps;
        $atributos['id_tipo_documento'] = $this->id_tipo_documento;


        return $atributos;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaUsuarios']);
        foreach ($atributos as $nombreAtributos) {
            if (isset($info['usu_' . $nombreAtributos])) {
                $this->$nombreAtributos = $info['usu_' . $nombreAtributos];
            }
        }
    }

    function getListaUsuarios() {
        return $this->listaUsuarios;
    }

    function setListaUsuarios($listaUsuarios) {
        $this->listaUsuarios = $listaUsuarios;
    }

}
