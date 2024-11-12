<?php
include_once "db.class.php";

$telefono=$_POST['phone'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];

insertarContacto($telefono,$nombre,$email);

header("Location:index.php");


?>