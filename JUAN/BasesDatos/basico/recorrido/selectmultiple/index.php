<?php
//1.- conectar con la db.
$host="localhost";
$db="pruebajuan";
$user="root";
$password="";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$sql="SELECT * FROM curso";
// me va a devolver un array bidimensional->fetchAll()
$datos=$conexion->query($sql)->fetchAll();

// print_r($datos);

foreach($datos as $elemento) {
    echo $elemento['idCurso']. " - ". $elemento['nombre'];
    echo "<br>";
}

?>