<?php

$contra = $_POST['contra'];
echo "La contraseña recibida es $contra <br>";
$contra1 = password_hash($contra, PASSWORD_DEFAULT);
$contra2 = password_hash($contra, PASSWORD_BCRYPT);
echo "La contraseña en PASSWORD_DEFAULT es $contra1 <br>";
echo "La contraseña en PASSWORD_BCRYPT es $contra2 <br>";
?>