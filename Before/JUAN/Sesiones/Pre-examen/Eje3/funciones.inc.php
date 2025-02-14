<?php
function esDivisor($num1,$num2) {
    return ($num1 % $num2 == 0);
}

function sonAmigos ($num1, $num2) {
    $suma1 = 0;
    $suma2 = 0;

    for ($i=1; $i < $num1 ; $i++) { 
        if (esDivisor($num1,$i)) $suma1+=$i;
    }

    for ($j=1; $j < $num2 ; $j++) { 
        if (esDivisor($num2,$j)) $suma2+=$j;
    }


    return ($num1 == $suma2) and ($num2 == $suma1);

}

?>