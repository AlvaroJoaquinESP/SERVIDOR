<?php
session_start();
require_once("config/config.php");
require_once("controller/userController.php");
require_once("controller/airportController.php");

function execute($controller, $action){
    $controller = new $controller();
    //Se valida si se quiere eliminar un articulo, para poder recuperar el id que se envia por GET.
    if(isset($_REQUEST["action"]) && $_REQUEST["action"]=="deleteAirport"){
        $method = $_REQUEST["action"];
        $controller->$method(($_REQUEST["id"]));
    }else{
        $controller->$action();
    }
}

// MAIN
if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
} else {
    $controller = 'UserController';
    $action = 'showLogin';
}

execute($controller, $action);