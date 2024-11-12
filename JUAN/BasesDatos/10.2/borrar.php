<?php
include_once "db.class.php";
$telefono =$_GET['telefono'];

borrar_contacto($telefono);

header("Location:index.php");
?>