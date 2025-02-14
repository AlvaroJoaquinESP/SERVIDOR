<?php
include_once("persona.class.php");


$alvaro = new Persona("Alvaro", 22);
$otro = new Persona();


echo $alvaro->getNombre()."<br>";
echo $alvaro->getEdad()."<br>";

echo "<hr>";
echo $alvaro->getNombre ()."<br>";
echo $otro->getEdad()."<br>";




?>
