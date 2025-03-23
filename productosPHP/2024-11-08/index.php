<?php
require_once("controller/productController.php");
define("BASE_URL", "http://localhost/2024-11-08/");

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    //Por defecto
    $action = 'defaultProduct';
}

$productController = new ProductController();
$productController->$action();

?>