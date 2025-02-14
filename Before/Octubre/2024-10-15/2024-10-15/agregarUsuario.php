<?php

require_once("usuario.php");
session_start();

//validar
function existeUsuario($usuario){
    $encontrado=false;
    foreach ($_SESSION["usuarios"] as $usu) {
        if (
            $usu->getNombre() == $usuario->getNombre()
            && $usu->getApellidos() == $usuario->getApellidos()
        ) {
            $encontrado = true;
            break;
        }
    }
    return $encontrado;
}

//Se encarga de guardar un usuario en mi array de sesion
function agregarUsuario($usuario){
    if (existeUsuario($usuario)) {
        echo "Ya existe el usuario " . $usuario->getNombre() . " " . $usuario->getApellidos();
    } else {
        $_SESSION["usuarios"][] = $usuario;
        echo "Usuario añadido correctamente";
    }

    echo "<a href='listarUsuario.php'> volver al listado</a>";
}




// Recupero la información del formulario
$nombre = $_REQUEST["nombre"];
$apellidos = $_REQUEST["apellidos"];
$edad = $_REQUEST["edad"];

//instancio un objeto de usuario
$usuario = new Usuario();
$usuario->setNombre($nombre)->setApellidos($apellidos)->setEdad($edad);

//guardo el suario en mi array de usuarios
agregarUsuario($usuario);
