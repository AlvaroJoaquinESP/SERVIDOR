<?php

require_once("../model/user.php");
require_once("../helper/util.php");

class UserRepository {

    /* Comprobar que los datos introducidos del usuario existen en BBDD. */
    public function validateUser($user) {
        
        $query =  Util::getConex()->prepare("SELECT * FROM USER WHERE NAME=? AND PASSWORD=?");

        $query->bindValue(1, $user->getName());
        $query->bindValue(2, $user->getPassword());
    }

}

?>