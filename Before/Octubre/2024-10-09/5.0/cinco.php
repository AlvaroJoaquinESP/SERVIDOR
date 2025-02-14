<?php 
function esMayor() {
    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];
    $num3 = $_REQUEST["num3"];
    if ($num1 > $num2 && $num1 > $num3) {
        echo $num1. " es mayor";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo $num2. " es mayor";
    } else {
        echo $num3. " es mayor";
    }
}

esMayor();




?>