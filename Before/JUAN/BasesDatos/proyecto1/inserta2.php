<?php
include_once "db.inc.php";

$idCurso=$_POST['idCurso'];
$nombre=$_POST['nombre'];
$aula=$_POST['aula'];

insertarCurso($idCurso,$nombre,$aula);

header("Location:index.php");

?>