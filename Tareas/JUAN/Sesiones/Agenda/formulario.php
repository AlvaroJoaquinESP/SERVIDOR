<?php
session_start();
?>

<form action="procesa.php" method="post">
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label>Telefono</label>
    <input type="tel" name="telefono" id="telefono" required>
    <br>
    <input type="submit" value="Enviar">



</form>