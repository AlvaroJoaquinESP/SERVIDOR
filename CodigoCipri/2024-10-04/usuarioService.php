<?php
//Incluyo la clase usuario.
//Primero meto el usuario y luego inicia contraseña.
require_once("usuario.php");
session_start();


if(!isset($_SESSION['usuarios'])){
    //Así se añade un elemento a un array.
    $_SESSION['ususarios'] = [];
}

//Recupero la información del formulario.
$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];
$edad = $_REQUEST["edad"];


//Instancio un objeto de usuario.
$usuario = new Usuario();
$usuario->setNombre($nombre)->setApellidos($apellidos)->setEdad($edad);

//Lo guardo en el array de usuarios.
$usuarios[]=$usuario;
var_dump($usuarios);

echo "<br>";









