<?php

require_once("repository/signRepository.php");
class signController
{
    public function welcome()
    {
        require_once("view/signHeader.php");
        echo "Bienvenido " . "<b>" . $_SESSION['name'] . "</b>" . ", seleccione una opción.";
        require_once("view/signFooter.php");
    }
}
