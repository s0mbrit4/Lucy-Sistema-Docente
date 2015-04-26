<?php
//-----------------abre_conexion.php 
function dbConnect (){
    $conn=null;
    $host='localhost';
    $db='Herramienta';
    $user='root';
    $pwd='root';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    }
    catch (PDOException $e) {
        echo "No se puede alcanzar la base de datos $db";
        exit;
    }
    return $conn;
 }
?>
