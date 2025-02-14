<?php
session_start();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$_SESSION['nombres'][] = $nombre;
$_SESSION['telefonos'][] = $telefono;

/* Ejemplo de arrays
$a=[];

$a[] = 344;
*/
header("Location:index.php");
