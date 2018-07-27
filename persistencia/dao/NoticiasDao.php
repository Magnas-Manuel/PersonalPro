<?php

namespace persistencia\Dao;

use PDO;
use persistencia\Generico\GenericoDao;
use persistencia\vo\UsuarioVO;

class NoticiasDao extends GenericoDao {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'noticias');
    }

    public function consultarNoticias() {
        $sqlConsulta = 'Select id_noticia, descripcion, fecha_inicio, fecha_fin, noti.ruta_foto as ruta, noti.id_usuario as usuario '
                . 'from noticias as noti inner join usuario as us on noti.id_usuario=us.id_usuario order by id_noticia';
        $sentenciaConsulta = $this->cnn->prepare($sqlConsulta);
        $sentenciaConsulta->execute();
        $filasConsultaNoticias = $sentenciaConsulta->fetchAll();
        return $filasConsultaNoticias;
    }

    public function actualizar() {
        try {
            $sql = 'UPDATE noticias SET descripcion = :descripcion, fecha_inicio = :fecha_inicio, fecha_fin = :fecha_fin, ruta_foto = :ruta_foto where id_noticia = :id_noticia AND id_usuario = :id_usuario';
            $sentenciaConsulta = $this->cnn->prepare($sql);
            $resultadoConsulta = $sentenciaConsulta->execute($_POST);
            $array['codigo'] = 1;
            $array['mensaje'] = 'Noticia Actualizada Correctamente';
        } catch (Exception $ex) {
            $array['codigo'] = -1;
            $array['mensaje'] = 'Error al Actualizar';
        }
        header('Content-Type:application/json');
        echo json_encode($array);
        return $resultadoConsulta;
    }

}
