<?php
function valorAbsoluto($numero) {
    if($numero < 0) {
        echo $numero * (-1);
    } else {
        echo $numero;
    }
}
valorAbsoluto($_REQUEST['name']);
?>