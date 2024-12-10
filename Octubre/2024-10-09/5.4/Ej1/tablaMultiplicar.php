<?php
function tabla() {
    // Verifico si el valor del número ha sido enviado.
    
    if (isset($_REQUEST["pp"])) {
       $value =  $_REQUEST["pp"];
    }
    
    
    if (isset($_REQUEST["base"])) {
        // Recojo el valor enviado.
        $base = $_REQUEST["base"];
        
        echo "<h2>Tabla de multiplicar del $base</h2>";

        for ($i= 1; $i <= 10; $i++) { 
            $resultado = $base * $i;
            echo "<br>";
            echo $resultado;
        }
    
    } else {
        echo "Introduce un número";
    }
}

// Llamo a la función . 
tabla();

?>