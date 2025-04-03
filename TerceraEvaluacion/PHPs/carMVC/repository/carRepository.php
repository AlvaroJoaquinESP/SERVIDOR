<?php
require_once("config/configDB.php");
require_once("model/car.php");

class CarRepository {
    
    // Conexión con la base de datos, para m
    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM car";
        $query = $this->getPDO()->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        $car = [];

        foreach ($list as $valor) {
            $car[] =  new Car($valor[0], $valor[1], $valor[2], $valor[3], $valor[4]);
        }
        
        return $car;
    }

    
    public function insert($car)
    {
        $sql = "INSERT INTO car (model, brand, year, stock) VALUES (?,?,?,?)";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $car->getModel());
        $query->bindValue(2, $car->getBrand());
        $query->bindValue(3, $car->getYear());
        $query->bindValue(4, $car->getStock());
        return $query->execute();
    }
}

?>