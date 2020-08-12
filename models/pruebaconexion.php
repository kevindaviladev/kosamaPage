<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// try{
//     $cnx = new PDO("Driver={PostgreSQL};Server=dbkosamaproduction.cgatar706ceb.us-east-2.rds.amazonaws.com;Port=5432;Database=kosama;Uid=postgres;Pwd=temealasangre;");
// }catch(Exception $exc){
//     echo $exc;
// }
$dbname="kosama";
$host="dbkosamaproduction.cgatar706ceb.us-east-2.rds.amazonaws.com"; 
$dbuser="postgres";
$dbpass="temealasangre";
        
$dsn = "dblib:host=$host;port=5432;dbname=$dbname;user=$dbuser;password=$dbpass";
 
$conn_string = "host=$host port=5432 dbname=$dbname user=$dbuser password=$dbpass";
$dbconn4 = pg_connect($conn_string);
$response = pg_query($dbconn4, "SELECT * FROM proyecto");
while ($row = pg_fetch_row($response)) {
    echo "Author: $row[0]  E-mail: $row[1]";
    echo "<br />\n";
  }

?>