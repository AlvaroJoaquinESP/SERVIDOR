<?php

require_once("usuario.php");

session_start();

// VALIDAR
// function existeUsuario($usuario1) {
//     $encontrado = false;
//     foreach ($_SESSION["usuario"] as $usu) {
//         if ($usu->getNombre() == $usuario1->getNombre() && $usu->getApellidos() == $usuario1->getApellidos() ) {
//             $encontrado = true;
//         } else {
//             $encontrado = false;
//         }
//     }
//     return $encontrado;
// }

// Recupero la información del formulario. 
$nombre = $_REQUEST["name"];
$apellidos = $_REQUEST["surname"];
$edad = $_REQUEST["age"];

// Creo un array en sesión para almacenar usuarios SI NO ESTÁ REGISTRADO
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = [];
}


// Creo el usuario con los datos del formulario.
$usuario1 = new Usuario();
$usuario1->setNombre($nombre)->setApellidos($apellidos)->setEdad($edad);


function agregarUsuario($usuario1)
{
    // if(!existeUsuario($usuario1)){
    //     $_SESSION["usuario"][] = $usuario1;
    // }
    // else{
    //     echo "Usuario encontrado";
    // }

    // -----------------PHP NO MANEJA BIEN IN_ARRAY SIN IMPLEMENTAR LOS MÉTODOS __EQUALS Y __HASH.----------------
    if (in_array($usuario1, $_SESSION["usuario"])) {
        echo "El nombre y los apellidos introducios ya han iniciado sesión anteriormente." . "<br>" . "<br>";
    } else {
        $_SESSION["usuario"][] = $usuario1;
    }
}





// Me creo un array de usuarios.
//$usuarios = [];


// Guardo el usuario en la sesión.
//$_SESSION["usuario"][] = $usu;


// Comprobar si el usuario a insertar ya está en la sesión.   


agregarUsuario($usuario1);

// Imprimo el array que guarda los usuarios de la sesión.
print_r($_SESSION["usuario"]);
