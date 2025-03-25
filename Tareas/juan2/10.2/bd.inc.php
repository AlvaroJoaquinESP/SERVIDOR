<?php

function conectar() {
    try {
        $host = "localhost";
        $basedatos = "agenda";
        $usuario = "root";
        $password = "";

        return new PDO("mysql:host=$host; dbname=$basedatos", $usuario, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function obtener_todos_contactos2() {
    $conexion = conectar();

    $sql = "SELECT * FROM contacto";

    $datos = $conexion->query($sql)->fetchAll();
    
    return $datos;
}

function borrar_contactos2($telefono) {
    $conexion=conectar();

    $sql="DELETE FROM contacto WHERE telefono = '$telefono'";
    $conexion->query($sql);
}
?>