<?php
//Para definir un array.
$array = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');

//Para imprimir un array utilizo var_dump().
//Esto no !!echo $array!!;

//Así sí.
var_dump($array);

//Para imprimir cualquier elemento del array, puedo usar echo.
echo '<br>';
echo '<br>';
echo $array[0];
echo '<br>';
echo $array[1];
echo '<br>';
echo '<br>';


//Para recorrer.
foreach($array as $dia) {
    //Cada iteracion de array lo meto en dia.
    echo $dia;
    echo '<br>';
}

//En php, todos los arrays son asociativos, pero implicitamente. Aquí uno explícitamente.
$arrayNombres = array('A' =>'Alberto', 'B' =>'Benito','C' =>'Cipri','D' =>'Diego');

foreach($arrayNombres as $key => $value) {
    echo $key. ' su valor es '. $value;
    echo '<br>';
}


//PHP permite ordenar por key y por value, tanto descendente como ascendente.

//Lo imprime al revés.
 krsort($arrayNombres);

 foreach($arrayNombres as $key => $value) {
    echo $key. ' su valor es '. $value;
    echo '<br>';
}

?>