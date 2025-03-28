<?php
require_once("config/config.php");
require_once("controller/userController.php");
require_once("controller/articleController.php");
session_start();
if (isset($_GET["action"]) && isset($_GET["controller"])) {
    $action = $_GET["action"];
    $controller = $_GET["controller"];
} else {
    $action = "show";
    $controller = "userController";
}

$controller = new $controller();

//Se valida si se quiere eliminar un articulo, para poder recuperar el id que se envia por GET.
if(isset($_GET["action"]) && $_GET["action"]=="delete"){
    $controller->delete($_GET["id"]);
}else{
    $controller->$action();
}

