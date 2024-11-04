<?php 
$var = 11;

function saberDivisores($var) {
    $contDivisores = 0;
    for($v = 1; $v <= $var; $v++) {
        if ($var % $v == 0) {
            $contDivisores++;
            echo $v.', ';
        }
    }
}

saberDivisores($var);

?> 