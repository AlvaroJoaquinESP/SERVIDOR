<?php
function conectar () {
    try {
     
    $user = "root";
    $host = "localhost";
    $password = "";
    $db = "biblioteca";

    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    return $conexion;
    } catch (PDOException $e) {
        $e->getMessage();
    }

}

?>