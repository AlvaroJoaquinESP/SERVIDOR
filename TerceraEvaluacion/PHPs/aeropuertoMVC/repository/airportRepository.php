<?php
require_once("config/ConfigDB.php");
require_once("model/airport.php");
class AirportRepository
{

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function getAll()
    {

        $sql = "SELECT * FROM airport";
        $consulta = $this->getPDO()->prepare($sql);
        $consulta->execute();

        // FetchAll ya que no tengo un where en la consulta.
        $listado = $consulta->fetchAll();
        $aeropuerto = [];
        foreach ($listado as $registro) {
            // También se puede poner con $registro['nombreCampoBD'];
            $aeropuerto[] = new Airport($registro[0], $registro[1], $registro[2], $registro[3]);
        }

        return $aeropuerto;
    }

    public function addAirport($aeropuerto)
    {

        $sql = "INSERT INTO airport (location, numRoad, gateway) values (?,?,?)";

        /**
         * Prepara la consulta SQL sin compilarla.
         * Permite usar parámetros con marcadores de posición (?).
         * Separa la estructura de la consulta de los datos.
         * Ayuda a prevenir inyecciones sql.
         * Mayor eficiencia si se ejecuta múltiples veces.
         */
        $query = $this->getPDO()->prepare($sql);

        $query->bindValue(1, $aeropuerto->getLocation());
        $query->bindValue(2, $aeropuerto->getNumRoad());
        $query->bindValue(3, $aeropuerto->getGateway());

        return $query->execute();
        // return $query->execute()>0; Asi devuelve true o false en vez de 0 o 1. Válido para comprobaciones en el controller. if...
    }


    public function verify($location)
    {
        $sql = "SELECT count(location) from airport where lower(location) = lower(?)";
        $query = $this->getPDO()->prepare($sql);

        $query->bindValue(1, $location);
        $query->execute();
        // FetchColumn() ya que la consulta es COUNT.
        return $query->fetchColumn()>0;

    }
}
