<?php
session_start();
if (!isset($_SESSION['token'])) {
    header("Location:formulario.php");
}

?>
<a href="cerrarSesion.php">Cerrar Sesion??</a>