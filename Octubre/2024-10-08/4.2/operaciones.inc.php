<?php
function rellenador() {
    $num1 = mt_rand(1,49);

    //Mientras que sea igual, genero uno nuevo.
    do{
        $num2 = mt_rand(1,49);
    }while($num2 == $num1);

    do{
        $num3 = mt_rand(1,49);
    }while($num3 == $num1 or $num2 == $num3);

    do{
        $num4 = mt_rand(1,49);
    }while($num4 == $num1 or $num4 == $num3 or $num4 == $num2);

    do{
        $num5 = mt_rand(1,49);
    }while($num5 == $num1 or $num5 == $num3 or $num5 == $num2 or $num5 == $num4);

    do{
        $num6 = mt_rand(1,49);
    }while($num6 == $num1 or $num6 == $num3 or $num6 == $num2 or $num6 == $num4 or $num6 == $num5);

    do{
        $num7 = mt_rand(1,49);
    }while($num7 == $num1 or $num7 == $num3 or $num7 == $num2 or $num7 == $num4 or $num7 == $num5 or $num7 == $num6);


    echo $num1 . ', ' . $num2 . ', ' . $num3 . ', '. $num4 . ', '. $num5 . ', '. $num6 . ', '. $num7 . ', ' . '<br>';
}


?>