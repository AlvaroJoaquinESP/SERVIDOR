<?php
function esDivisor($numero1, $numero2){
    return ($numero1 % $numero2 == 0);
}

function defectivo($numero) {
    $contador = 1;
    $suma = 0;

    while ($contador < $numero) {
        if (esDivisor($numero,$contador)) {
            $suma += $contador;
        }
        $contador++;
    }
    return ($numero>$suma);
}


?>

