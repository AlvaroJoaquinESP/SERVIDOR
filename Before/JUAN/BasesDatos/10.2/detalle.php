<?php
include_once "db.class.php";

$telefono=$_GET['telefono'];

$elemento = obtener_datos_un_contacto($telefono);

echo "Nombre: " . $elemento['nombre'];
echo "<br>";


echo "Telefono: " . $elemento['telefono'];
echo "<br>";

echo "Email: " . $elemento['email'];
echo "<br>";
?>