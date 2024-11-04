<?php

require_once('usuario.php');


$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$edad = $_REQUEST['edad'];






//Me traigo aqui el main.
//main
$usuario = new Usuario();
$usuario->setNombre($nombre)->setApellidos($apellidos)->setEdad($edad);
echo $usuario;

echo "<br>";






?>