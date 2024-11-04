<?php
function parImpar($num) {
    if(($num % 2) == 0) {
        echo 'La variable'.$num.'Es par';
    } else {
        echo 'Es impar';
    }
}

parImpar($_REQUEST['name']);


?>