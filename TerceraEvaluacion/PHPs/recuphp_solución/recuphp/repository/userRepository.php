<?php
require_once("config/configDB.php");
require_once("model/user.php");
class UserRepository
{

    private function getConnection()
    {
        //Se obtiene la conexión a la base de datos
        return (new ConfigDB())->getInstance();
    }

    public function validate($pass,$name)
    {
        //Se valida el usuario y contraseña, se retorna un objeto de tipo User si es correcto.
        $query = $this->getConnection()->prepare("Select * from user where name=? AND pass=?");
        $passMd5 = md5($pass);
        $query->bindValue(1, $name);
        $query->bindValue(2, $passMd5);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            return new User(
                $result['id'],
                $result['name'],
                $result['rol'],
                $result['pass']
            );
        } else {
            return null; // Manejar el caso cuando la validación falla
        }
    }
}
