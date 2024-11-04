<?php
$url = 'https://api.thecatapi.com/v1/images/0XYvRd7oD';

$result = file_get_contents($url); //Llama a la url y te da la información.

$data = json_decode($result, true); //Con el true trocea la info y la mete en un array.

//echo solo vale para imprimir strings.

var_dump($data);


?>

<!--name-->
<h1>
    <?= $data['breeds'][0]['name']; ?>

</h1>



//Siendo 'url' la key del mapa de la url de arriba.
<img src="<?= $data['url'] ?>" alt="">
<!--temperament-->
<ul>
    <?php
    $temperament = explode(',',  $data['breeds'][0]['temperament']); //Con el explode separo los temperamentos. //El 0 es del anteriror.
    foreach($temperament as $t) {
        echo'<li>'.$t.'<li>';
    }

    ?>

</ul>