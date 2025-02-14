<?php
$lineas = 6;

//Variable para almacenar los asteriscos.
$asteriscos = '*';

//Bucle para imprimir cada línea.
for($i = 0; $i <= $lineas; $i++) {
    echo $asteriscos.'<br>'; //Imprimo la línea actual.
    $asteriscos.='*'; //Concateno para la siguiente línea.
}


?>