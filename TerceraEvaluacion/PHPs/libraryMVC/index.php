<?php
session_start();
require_once("config/config.php");
require_once("controller/userController.php");
require_once("controller/bookController.php");

if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
} else {
    $controller = "UserController";
    $action = "showLogin";
}

$controller = new $controller();
$controller->$action();

?>