<?php
session_start();

if (!isset($_SESSION['nombres'])) {
    $_SESSION['nombres'] = [];
    $_SESSION['telefonos'] = [];
}

for($i = 0; $i<count($_SESSION['nombres']); $i++) {
    echo $_SESSION['nombres'][$i];
    echo " - ";
    echo $_SESSION['telefonos'][$i];
    echo "<br>";
    
}
?>
<hr>
<a href="formulario.php">Insertar</a>
