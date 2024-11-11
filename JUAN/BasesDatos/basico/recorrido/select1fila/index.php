<?php
//1.- conectar con la db.
$host="localhost";
$db="pruebajuan";
$user="root";
$password="";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$sql="SELECT * FROM curso";
// me va a devolver solo 1 fila->fetch()
$datos=$conexion->query($sql)->fetch();

echo $datos['idCurso']. " - " . $datos['nombre'] , " - ".$datos['aula'];




?>