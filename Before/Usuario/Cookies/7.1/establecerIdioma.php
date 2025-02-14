<?php
$idioma = $_REQUEST["idioma"];

// Nombre y valor.
setcookie("idioma", $idioma);
header("location:dashboard.php");

// switch ($idioma) {
//     case '':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }

?>