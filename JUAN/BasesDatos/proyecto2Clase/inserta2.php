<?php
include_once "db.class.php";
$db = new BaseDatos();

$idCurso=$_POST['idCurso'];
$nombre=$_POST['nombre'];
$aula=$_POST['aula'];

$db->insertarCurso($idCurso,$nombre,$aula);

header("Location:index.php");

?>