<?php
session_start();
require_once("controller/userController.php");
require_once("config/config.php");

/**
 * $_GET['action'] y $_GET['controller'] son las variables de las rutas del htacces.
 */

if(isset($_GET['action']) && isset($_GET['controller'])) {
    $action = $_GET['action'];
    $controller = $_GET['controller']; // variable en .htaccess.
} else {
    // Por defecto, en la primera pantalla se cargaría el login. ----¿Esto es mi pantalla por defecto?----
    
    $action = 'login';
    $controller = 'UserController';
}

// Lo puedo  usar así, ya que arriba le he asignado el valor UserController a $controller.  

$userController = new $controller(); 
$userController->$action();






?>