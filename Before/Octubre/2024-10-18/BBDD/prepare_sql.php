<?php
// $marcas = array("FIAT","FERRARI","SEAT","CUPRA","TESLA","DODGE");
$marcas = array("HYUNDAI","TOYOTA","NISSAN","MAZDA");
$conexion = new PDO("mysql:host=localhost;dbname=prueba", "root", "");

$consulta = $conexion->prepare("INSERT INTO MARCAS (DESCRIPCION) VALUES (:marca)"); // En este caso, ? es el valor del array de marcas.

// Recorrer el array de marcas y realizar INSERT
foreach ($marcas as $marca) {
    // Establece el parámetro 1 con el valor que haya en marca.
    $consulta->bindParam(':marca', $marca);
    $consulta->execute();
}








?>