<?php

/**
 * Generador de tablas de multiplicar.
 */

$num1 = random_int(0, 10);

for ($i=0; $i < 10; $i++) { 
    echo $num1 . " X ".  $i . " = " . $num1 * $i . "</br>";
}
