<?php

require_once("repository/airportRepository.php");

class AirportController{

    public function showList()
    {
        // Esta variable es la que recorro en airportList.php;
        $aeropuerto = (new AirportRepository())->getAll();
        require_once("view/airportList.php");
    }

    public function welcome()
    {
        require_once("view/airportHeader.php");
        echo "Bienvenido " . "<b>". $_SESSION['name'] . "</b>" . ", seleccione una opción.";
        require_once("view/airportFooter.php");
    }
}



?>