<?php
function esBisiesto($year) {
   
    if($year % 4 == 0 && $year % 100 != 0) {
        echo 'The submit year'.$year.'is a leap year';
    } else {
        echo 'The year isnt a leap year';
    }
}

esBisiesto($_REQUEST['name']);



?>