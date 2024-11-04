<?php

//Funciones.
function ini_data()
{
    return array(
        'Nadal' => 22,
        'Federer' => 20,
        'Djokovic' => 24,
        'Sinner' => 2,
        'Cipri' => 0
    );
}

function buscar($tenistas, $titulo) {
    foreach($tenistas as $tenista => $value) {
        if($value >= $titulo) {
            echo $tenista. " tiene ". $value. " slams";
            echo "<br>";
        }
    }
}


//Como el main.
$tenistas = ini_data();
if(isset($_REQUEST["granslams"])) {
    $titulo = $_REQUEST["granslams"];
    buscar($tenistas, $titulo);
}

