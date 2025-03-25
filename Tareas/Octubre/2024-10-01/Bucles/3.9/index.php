<?php

function esTriangular($numero) {
    $triangular = 0;
    $cont = 1;

    //Calcular números triangulares.
    while($triangular > $numero) {
        $triangular = $cont * ($cont + 1) / 2;
        $cont++;
    }

    //Verificar si es triangular.
    if($triangular == $cont) {
        return true;
    } else {
        //Si no es triangular, determino el mayor y el menor.
    $menor = ($cont - 2)*($cont - 1) / 2;
    $mayor = $triangular;
    return false;
    
    }

}

esTriangular(20);




?>