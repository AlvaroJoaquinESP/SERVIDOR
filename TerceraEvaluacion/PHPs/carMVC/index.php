<?php
session_start();
require_once("config/config.php");
require_once("controller/userController.php");
require_once("controller/carController.php");




if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
} else {
    $controller = "UserController";
    $action = "showLogin";
}
// Creo una clase del controller que reciba.
$controller = new $controller();
// Ejecuto la acción que reciba del controller.
$controller->$action();
?>