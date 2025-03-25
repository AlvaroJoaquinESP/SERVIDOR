<?php
include_once "articulo.php";

$article = new Article();
$article->show();
?>

<br>

<?php
$article->createArticle("USB", "Pendrive", 6.34);
$article->show();
?>
