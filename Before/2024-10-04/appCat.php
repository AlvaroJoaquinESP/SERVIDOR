<?php

$url = "https://api.thecatapi.com/v1/images/0XYvRd7oD";
$result = file_get_contents($url);
$data =  json_decode($result, true);

//var_dump($data);

?>


<!--name -->
<h1><?= $data["breeds"][0]["name"]?> </h1>

<!--imagen -->
<img src="<?=$data["url"] ?>" width="100" height="100"></img>

<!-- temperament -->
<ul>
    <?php
        $temperament = explode(",", $data["breeds"][0]["temperament"]);
        foreach($temperament as $t){
            echo "<li>".$t."</li>";
        }
    ?>
</ul>