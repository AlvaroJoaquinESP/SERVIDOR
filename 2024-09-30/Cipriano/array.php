<?php
$array = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
//var_dump($array);
echo "<br>";
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];

foreach ($array as $dia) {
    echo $dia;
    echo "<br>";
}

$array_nombres = array("A" => "Alberto", "B" => "Beatriz", "C" => "Carlos", "D" => "David", "E" => "Ernesto");

foreach ($array_nombres as $key => $value) {
    echo $key . " está asignado a " . $value."<br>";
   
}




?>