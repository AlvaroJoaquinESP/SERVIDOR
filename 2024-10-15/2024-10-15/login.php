<?php

session_start();

//guardo por primera vez mis credenciales en la sesion
if(!isset($_SESSION["usuario"]) && !isset($_SESSION["pass"])){
    $_SESSION["usuario"] = "admin";
    $_SESSION["pass"] = "admin";
}

//Recupero del formulario usuario y pass
$usuario = $_REQUEST["usuario"];
$pass = $_REQUEST["pass"];

if($usuario == $_SESSION["usuario"] && $pass == $_REQUEST["pass"]){
    $_SESSION["loged"] = true;
    header("location:listarUsuario.php");
}
else{
    echo "<h3 style='color:red'>Credenciales Incorrectas</h3>";
    echo "<br>";
    echo "<a href=index.html>Volver al login</a>";
}

?>