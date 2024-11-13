<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];

if ($login == "ribera" && $pass == "molinos") {
    $_SESSION['kk'] = true;
    header("Location:menu.php");
} else {
    echo "Usuario y/o contraseña incorrectos";
    header("refresh:3;url=index.php");
}


?>