<?php
require_once("config/ConfigDB.php");
require_once("model/airport.php");
class AirportRepository
{

    public function getAll()
    {
        $conex = (new ConfigDB()->getInstance());

        $sql = "SELECT * FROM airport";
        $consulta = $conex->prepare($sql);
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
}
