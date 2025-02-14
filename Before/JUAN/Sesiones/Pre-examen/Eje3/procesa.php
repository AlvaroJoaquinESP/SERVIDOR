<?php
require_once "funciones.inc.php";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if (sonAmigos($num1,$num2)) {
    echo "Los numeros son amigos";
} else {
    echo "Los numeros son enemigos";
}

?>