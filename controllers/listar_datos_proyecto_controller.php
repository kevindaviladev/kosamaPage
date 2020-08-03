<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../models/Conexion.php';
include_once '../models/Proyecto.php';
require_once '../util/funciones/Funciones.class.php';

try {
    //code...
    if (!isset($_POST["idProyecto"])) {
        Funciones::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $idProyecto = $_POST['idProyecto'];

    $objProyecto = new Proyecto();
    $resultado = $objProyecto->listarDatosProyecto($idProyecto);
    Funciones::imprimeJSON(200, "", $resultado);
} catch (\Throwable $th) {
    //throw $th;
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}
