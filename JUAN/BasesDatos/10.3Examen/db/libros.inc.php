<?php
include_once "conectar.inc.php";

function getLibros() {

    $conexion = conectar();

    $sql=$conexion->prepare("SELECT * FROM libro");
    $sql->execute();
    return $sql->fetchAll();
    
}




?>