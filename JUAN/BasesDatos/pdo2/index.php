<?php
$db="pruebajuan";
$user="root";
$password="";
$host="localhost";

$conexion=new PDO("mysql:host=$host;dbname=$db",$user,$password);

//$sql="INSERT INTO curso VALUES('1DAW','1 cfgs daw','d001')";
//$conexion->query($sql);

$sql2="UPDATE curso SET nombre='Pringaos de 1º'WHERE idCurso='1daw'";
$conexion->query($sql2);
?>