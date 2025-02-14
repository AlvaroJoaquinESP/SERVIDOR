<?php

require_once("usuario.php");

session_start();


// Creo un array en sesión para almacenar usuarios SI NO ESTÁ REGISTRADO
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = [];
}

// Recupero la información del formulario.
$nombre = $_REQUEST["name"];
$apellidos = $_REQUEST["surname"];
$edad = $_REQUEST["age"];


// Me creo un array de usuarios.
//$usuarios = [];

// Creo el usuario con los datos del formulario.
$usu = new Usuario();
$usu->setNombre($nombre)->setApellidos($apellidos)->setEdad($edad);

// Guardo el usuario en la sesión.
//$_SESSION["usuario"][] = $usu;


// Comprobar si el usuario a insertar ya está en la sesión.   
    if (in_array($usu, $_SESSION["usuario"] )) {
        echo "El nombre y los apellidos introducios ya han iniciado sesión anteriormente."."<br>". "<br>";
    } else {
        $_SESSION["usuario"][] = $usu;
    }
    

    // Imprimo el array que guarda los usuarios de la sesión.
var_dump($_SESSION["usuario"]);



?>