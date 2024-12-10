<?php


function sucecionFibonacci() {
    $alpha = 0;
    $beta = 1;

    echo $alpha. '<br>';
    echo $beta. '<br>';

    for ($i = 2; $i < 20; $i++) { 
     //Inicio en el tercer número, ya que empiezo como 0,1...                       
        $fibo = $alpha + $beta;
        echo $fibo.'<br>';
        $alpha = $beta;
        $beta = $fibo;
    }
}


sucecionFibonacci();
