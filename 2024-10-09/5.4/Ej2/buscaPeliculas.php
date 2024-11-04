<?php
function buscarPelicula() {
    $listado = ["El rey mono", "Hola", "Adios", "Nunca"];
    if (isset($_REQUEST["film"])) {
        $valorRecogido = $_REQUEST["film"];
        $encontrada = false;

        foreach ($listado as $value) {
            if ($value == $valorRecogido) {
                echo "Sí tenemos la película en el videoclub";
                $encontrada = true;
            }
        }
        
        if (!$encontrada) {
            echo "No tenemos la pelicula indicada";
        }
    } 
    
}

// Llamo a la función.
 buscarPelicula();


// elseif ($value != $valorRecogido) {
//     echo "No tenemos la película indicada";
//     break;
// }

?>


