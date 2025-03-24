<?php
    require_once("controller/userController.php");

    $controller = new UserController();
    $controller->showLogin();

?>