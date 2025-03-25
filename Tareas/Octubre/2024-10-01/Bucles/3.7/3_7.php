<?php

$variable = 14;

function esPrimo($variable) {
    for($i = 1; $i <= $variable; $i++) {
        if($variable % $i == 0) {
            echo $i. ' Es primo ';
        } 
    }
}

esPrimo($variable);


?>