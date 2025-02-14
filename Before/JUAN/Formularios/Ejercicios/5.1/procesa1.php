<?php
include_once("funciones.inc.php");

$numero = $_POST['numero'];


if (defectivo($numero)) {
    echo "El numero $numero es defectivo";
} else {
    echo "El numero $numero NO es defectivo";
}
?>