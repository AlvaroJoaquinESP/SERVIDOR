<?php
include "bd.inc.php";
$telefono = $_GET['telefono'];
borrar_contactos2($telefono);

header("Location: index.php");


?>