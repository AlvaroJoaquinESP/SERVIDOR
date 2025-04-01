<?php
require_once("config/configDB.php");
require_once("model/car.php");

class CarRepository {
    
    // Conexión con la base de datos, para m
    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }
}

?>