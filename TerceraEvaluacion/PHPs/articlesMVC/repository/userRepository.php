<?php
require_once("config/configDB.php");
require_once("model/user.php");
class UserRepository {

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }


    public function validate($name, $pass)
    {
        $sql = "SELECT * FROM user WHERE name=? AND pass=?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $name);
        $query->bindValue(2, $pass);
        $query->execute();
        $user = $query->fetch();

        return (!empty($user)) ? new User($user[0],$user[1],$user[2],$user[3]) : null;
    }


    

}


?>