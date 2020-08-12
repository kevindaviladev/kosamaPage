<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../models/Conexion.php';
include_once '../models/Proyecto.php';
require_once '../util/funciones/Funciones.class.php';



try {

    if (!isset($_POST["idCategoria"])){
        Funciones::imprimeJSON(500, "Falta completar datos", "");
        exit();
    }

    $tipoProyecto = $_POST['idCategoria'];

    $objProyecto = new Proyecto();
    $resultado = $objProyecto->listarProyectos($tipoProyecto);

    Funciones::imprimeJSON(200, "",$resultado);
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
    Funciones::imprimeJSON(500, $th, "");
}

?>