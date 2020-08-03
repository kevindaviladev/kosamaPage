<?php

require_once '../models/Conexion.php';

class Proyecto extends Conexion {

    public function listarProyectos($p_tipo_proyecto) {
        try {
            $sql = "select * from proyecto where tipo=:p_tipo_proyecto";
            $sentencia = $this->cnx->prepare($sql);
            $sentencia->bindParam(":p_tipo_proyecto",$p_tipo_proyecto);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function listarDatosProyecto($p_id_proyecto){
        try {
            //code...
            $sql = "select * from proyecto where id=:p_id_proyecto";
            $sentencia = $this->cnx->prepare($sql);
            $sentencia->bindParam(":p_id_proyecto",$p_id_proyecto);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function agregar(){
        try {
            //code...
            $sql = "";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

?>