<?php
//1.- conectar con la db.
$host="localhost";
$db="pruebajuan";
$user="root";
$password="";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$sql="SELECT count(*) FROM curso";
// me va a devolver solo 1 dato->fetchColumn()
$datos=$conexion->query($sql)->fetchColumn();

echo $datos;
?>