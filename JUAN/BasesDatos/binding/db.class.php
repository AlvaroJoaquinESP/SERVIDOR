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
    $sql = $conexion->prepare("SELECT * FROM contacto");
    $sql->execute();
    $datos = $sql->fetchAll();
    return $datos;
}

function insertarContacto($telefono, $nombre, $email)
{
    $conexion = conectar();
    
    /*$sql = $conexion->prepare("INSERT INTO contacto(telefono,nombre,email) VALUES (':telefono',':nombre',':email')");*/
    $sql = $conexion->prepare("INSERT INTO contacto(telefono,nombre,email) VALUES (?,?,?)");
    $sql->bindValue(1,$telefono);
    $sql->bindValue(2,$nombre);
    $sql->bindValue(3,$email);
    $sql->execute();
}

function borrar_contacto($telefono)
{
    $conexion = conectar();
    $sql = $conexion->prepare("DELETE FROM contacto WHERE telefono = :telefono");
    $sql->bindValue(":telefono",$telefono);
    $sql->execute();
}



function obtener_datos_un_contacto($telefono)
{
    $conexion = conectar();
    $sql = $conexion->prepare("SELECT * FROM contacto WHERE telefono = :telefono");
    $sql->bindValue(":telefono",$telefono);
    $sql->execute();
    return $sql->fetch();
}
