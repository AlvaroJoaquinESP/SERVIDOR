<?php
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

if (($user == $pass) and ($user == "admin")) {
    $_SESSION['token'] = true;
    echo "Gracias por entrar<br>";
    echo "<a href = 'secreta.php'>Bienvenido al VIP</a>";
} else {
    echo "Usuario y/o contraseña incorrectos<br>";
    echo "<a href = 'formulario.php'>Vuelve a intertarlo</a>";
}

?>
