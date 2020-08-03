<?php

class Conexion{
    protected $cnx;

    public function __construct(){
        $this->abrirConexion();
    }
    
    protected function abrirConexion(){
        $dbname="kosama";
        $host="dbkosamaproduction.cgatar706ceb.us-east-2.rds.amazonaws.com"; 
        $dbuser="postgres";
        $dbpass="temealasangre";

        // echo "Dentro";
        try {
            $this->cnx = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
            // $this->dbLink = new PDO($servidor, $usuario, $clave);
            // $this->dbLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exc) {
            // Funciones::mensaje($exc->getMessage(), "e");
            echo $exc;
        }
        return $this->cnx;
    }
}

?>