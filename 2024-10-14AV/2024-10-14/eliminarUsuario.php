<?php

require_once("usuario.php");
session_start();

$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];

foreach ($_SESSION["usuarios"] as $key =>$usu) {
    if ($usu->getNombre() == $nombre
        && $usu->getApellidos() == $apellidos
    ) {
        unset($_SESSION["usuarios"][$key]);
        echo "Se ha eliminado el usuario";
        echo "<br>";
        echo "<a href=index.php>Volver</a>";
    }
}
?>