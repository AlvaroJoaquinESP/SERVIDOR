<?php
require_once("usuario.php");
session_start();

$nombre = $_REQUEST["name"];
$apellidos = $_REQUEST["surname"];
$edad = $_REQUEST["age"];


// Lo tenía como usuario1 también.
foreach ($_SESSION["usuario"] as $key => $usuario2) {
    if ($usuario2->getNombre() == $nombre && $usuario2->getApellidos() ) {
        unset($_SESSION["usuario"][$key]);
    }
}

// Reindexar el array.
$_SESSION["usuario"] = array_values($_SESSION["usuario"]);
// Para no dejar saltos en el índice del array. ya que UNSET DEJA EL HUECO DEL INDICE VACÍO.

// header("location:index.html");

echo "<a href='index.html'>Volver al listado</a>";