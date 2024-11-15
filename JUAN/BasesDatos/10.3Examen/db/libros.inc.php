<?php
include_once "conectar.inc.php";

function getLibros() {

    $conexion = conectar();

    $sql=$conexion->prepare("SELECT * FROM libros");
    $sql->execute();
    return $sql->fetchAll();
    
}

function borrar_libro($CDU) {
    $conexion = conectar();

    $sql= $conexion->prepare("DELETE FROM libros WHERE CDU = :cdu");
    $sql->bindValue(':cdu', $CDU);
    $sql->execute();
}




?>