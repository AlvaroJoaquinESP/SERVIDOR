<?php
require_once "../cabecera.php";
require_once "../db/libros.inc.php";

$CDU=$_GET['CDU'];


borrar_libro($CDU);
echo "Libro borrado";
header("refresh:2;url=libros.php");



?>