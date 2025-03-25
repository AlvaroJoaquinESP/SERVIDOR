<?php
$idioma1 = $_COOKIE["idioma"];

// Como un swtich.
 $palabra = match ($idioma1) {
    "es" => "Hola",
    "en" => "Hello",
    "fr" => "Bonjour",
    "delete" => setcookie("idioma" , "", time() - 3600),
    default => "Hallo",
};

echo "<h1>".$palabra. "</h1>";
echo "<br>";
?>