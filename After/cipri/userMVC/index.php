<?php
require_once("./controller/userController.php");

/**
 * $_GET['action'] y $_GET['controller'] son las variables de las rutas del htacces.
 */

if(isset($_GET['action']) && isset($_GET['controller'])) {
    $action = $_GET['action'];
    $controller = $_GET['controller'];
} else {
    // Por defecto.
    $action = 'login';
    $controller = 'userController';
}

// min 37.






?>