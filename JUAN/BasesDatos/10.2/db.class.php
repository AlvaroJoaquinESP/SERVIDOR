<?php
function conectar()
{
    try {
        $db = "agenda";
        $user = "root";
        $password = "";
        $host = "localhost";

        $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        return $conexion;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function obtener_todos_contactos()
{
    $conexion = conectar();
    $sql = "SELECT * FROM contacto";
    return ($conexion->query($sql)->fetchAll());
}

function insertarContacto($telefono, $nombre, $email)
{
    $conexion = conectar();
    $sql = "INSERT INTO contacto(telefono,nombre,email) VALUES ('$telefono','$nombre','$email')";
    // Como es insertar, no devuelve nada
    $conexion->query($sql);
}

function borrar_contacto($telefono)
{
    $conexion = conectar();
    $sql = "DELETE FROM contacto WHERE telefono = '$telefono'";
    // Como es delete, no devuelve nada
    $conexion->query($sql);
}



function obtener_datos_un_contacto($telefono)
{
    $conexion = conectar();
    $sql = "SELECT * FROM contacto WHERE telefono = '$telefono'";
    return ($conexion->query($sql)->fetch());
}
