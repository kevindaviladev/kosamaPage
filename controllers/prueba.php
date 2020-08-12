<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbname="kosamarq_kosama";
        $host="atacama.lineadns.com"; 
        $dbuser="kosamarq_admin";
        $dbpass="kosamapass04";

        // echo "Dentro";
        try {
            $cnx = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpass); 
            $sql = "select count(*) as cantidad from proyecto";
            $result = $cnx->query($sql) or die("error");

            if($reg=$result->fetchObject()){
                $cantidad = $reg->cantidad;
                echo 'Cantidad de participantes: '.$reg->cantidad;
            };
        } catch (Exception $exc) {
            // Funciones::mensaje($exc->getMessage(), "e");
            echo $exc;
        }
?>