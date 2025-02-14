<?php
//1.- conectar con la db.
$host="localhost";
$db="pruebajuan";
$user="root";
$password="";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$sql="SELECT * FROM curso WHERE idCurso = '1daw'";
// me va a devolver solo 1 fila ->fetch()
$datos=$conexion->query($sql)->fetch();

print_r($datos);
?>