<?php
include_once "db.inc.php";

$idCurso=$_GET['idCurso'];
$curso=obtenerCurso($idCurso);

echo "<strong>Curso: </strong>";
echo $curso['idCurso'];
echo "<br/>";

echo "<strong>Nombre: </strong>";
echo $curso['nombre'];
echo "<br/>";

echo "<strong>Aula: </strong>";
echo $curso['aula'];
echo "<br/>";

?>