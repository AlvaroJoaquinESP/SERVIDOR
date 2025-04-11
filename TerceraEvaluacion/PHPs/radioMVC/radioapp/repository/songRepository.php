<?php
require_once("model/song.php");
require_once("config/configDB.php");

class SongRepository
{

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function getAll()
    {
        $user_id = 2;

        if ($_SESSION['rol'] == "admin") {
            $sql = "SELECT * FROM song";
            $query = $this->getPDO()->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();

        } else {

            $sql = "SELECT * FROM song WHERE user_id = ?";
            $query = $this->getPDO()->prepare($sql);
            $query->bindValue(1, $user_id);
            $query->execute();
            $list = $query->fetchAll();

        }

        $songs = [];

        foreach ($list as $value) {
            $songs[] = new Song($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6]);
        }

        return $songs;
    }


    public function add($title, $artist, $dedication)
    {
        date_default_timezone_set("Europe/Madrid");
        $fechaHoraActual = date("Y-m-d H:i:s");

        $status = "pending";

        $sql = "INSERT INTO song (user_id, status, title, artist, dedication, created_at) VALUES (?,?,?,?,?,?)";
        $query = $this->getPDO()->prepare($sql);

        $query->bindValue(1, $_SESSION['id']);
        $query->bindValue(2, $status);
        $query->bindValue(3, $title);
        $query->bindValue(4, $artist);
        $query->bindValue(5, $dedication);
        $query->bindValue(6, $fechaHoraActual);
        return $query->execute();
    }


    public function delete($id)
    {
        $sql = "DELETE FROM song WHERE id = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $id);
        return $query->execute();
    }


    public function emit()
    {
        $status = "completed";
        $sql = "UPDATE SET song status = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $status);
        return $query->execute();
    }


    public function pending()
    {
        $status = "pending";
        $sql = "SELECT * FROM song WHERE STATUS = ?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $status);
        return $query->execute();
    }


    // public function findById()
    // {
    //     $sql = "SELECT * FROM song WHERE user_id = ?";
    //     $query = $this->getPDO()->prepare($sql);
    //     $query->bindValue(1, $_SESSION['id']);
    //     $query->execute();
    //     return $query->fetch();
    // facil ahora, pero no me da tiempo, deberia de pasar la lógica del getAll al controller y dividirlo en 2 métodos aquí en el repositorio. Un saludo, camarada.
    // }
}
