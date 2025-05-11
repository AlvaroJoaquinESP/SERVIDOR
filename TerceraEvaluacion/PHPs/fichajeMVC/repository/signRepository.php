<?php
require_once("config/ConfigDB.php");
require_once("model/sign.php");

class SingRepository
{

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function getLastSign($user_id)
    {
        $sql =  "SELECT tipo_fichaje FROM fichajes WHERE id_usuario = ? AND DATE(timestamp_fichaje) = CURDATE() ORDER BY timestamp_fichaje DESC LIMIT 1";

        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $user_id);
        $query->execute();
        $user = $query->fetch();
        return $user;
    }


    public function getIn()
    {
        $sql = "INSERT INTO fichajes (id_usuario, timestamp_fichaje, tipo_fichaje) VALUES (?,NOW(),?)";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $_SESSION['user_id']);
        $query->bindValue(2, "Entrada");
        return $query->execute();
    }


    public function getOut()
    {
        $sql = "INSERT INTO fichajes (id_usuario, timestamp_fichaje, tipo_fichaje) VALUES (?,NOW(),?)";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $_SESSION['user_id']);
        $query->bindValue(2, "Salida");
        return $query->execute();
    }


    public function getList()
    {
        $sql = "SELECT * FROM fichajes ORDER BY pages DESC";
        $query = $this->getPDO()->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();

        $signs = [];

        foreach ($list as $value) {
            $signs[] = new Sign($value[0], $value[1], $value[2], $value[3], $value[4]);
        }

        return $signs;
    }
}
