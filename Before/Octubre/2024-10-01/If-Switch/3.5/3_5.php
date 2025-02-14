<?php
$num1 = 0;
$num2 = 1;
function cambio($num1, $num2) {
    switch (mt_rand($num1, $num2)) {
        case 0: echo 'Irás a la cárcel';
        break;
        case 1: echo 'Irás a casa';
        break;
        default: echo 'Voy a conocer a Carlitos';
    }
}

cambio($num1, $num2);

?>