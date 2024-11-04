<?php
include_once('operaciones.inc.php');

for ($i = 0; $i < 8; $i++) {
    echo 'Apuesta ' . $i . ': ';
    rellenador();
}
