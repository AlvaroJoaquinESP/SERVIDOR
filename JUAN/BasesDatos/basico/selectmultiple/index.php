<?php
//1.- conectar con la db.
$host="localhost";
$db="pruebajuan";
$user="root";
$password="";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//2.- sentencia sql
$sql="SELECT * FROM curso";
// devuelve un array bidimensional->fetchAll();
$datos=$conexion->query($sql)->fetchAll();

print_r($datos);
?>