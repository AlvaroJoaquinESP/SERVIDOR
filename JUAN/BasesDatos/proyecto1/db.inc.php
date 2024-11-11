<?php
function conectar()
{

    try {
        $db = "pruebajuan";
        $user = "root";
        $password = "";
        $host = "localhost";

        $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        return $conexion;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
