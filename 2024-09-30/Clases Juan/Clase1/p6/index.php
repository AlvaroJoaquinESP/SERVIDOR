<?php
#Primitiva del 1 al 49 pero sin repetir numeros.

$num1 = mt_rand(1, 49);

do {
    $num2 = mt_rand(1, 49);
} while ($num2 == $num1);

do {
    $num3 = mt_rand(1, 49);
} while ($num3 == $num1 or $num3 == $num2);

do {
    $num4 = mt_rand(1, 49);
} while ($num4 == $num1 or $num4 == $num2 or $num4 == $num3);   

do {
    $num5 = mt_rand(1, 49);
} while ($num5 == $num1 or $num5 == $num2 or $num5 == $num3 or $num5 == $num4);


echo $num1.",".$num2.",".$num3.",".$num4.",".$num5;
?>