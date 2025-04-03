<?php
require_once("config/configDB.php");
require_once("model/user.php");
class userRepository {

    private function getPDO()
    {
       return (new ConfigDB())->getInstance();
    }


    public function validate($name, $password)
    {
        $sql = "SELECT * FROM user WHERE NAME=? and PASSWORD=?";
        $query = $this->getPDO()->prepare($sql);
        $query->bindValue(1, $name);
        $query->bindValue(2, md5($password));
        $query->execute();
        $user = $query->fetch();

        return (!empty($user)) ? new User($user['id'], $user['name'], $user['password'], $user['role']) : null;
    }
}



?>