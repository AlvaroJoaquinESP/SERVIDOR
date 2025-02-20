<?php

require_once("../repository/userRepository.php");
class UserController {
    
    // Cargo el login
    public function login() {

    }

    // Validar los datos introducidos

    public function validate() {
        (new UserRepository())->validateUser($user);
        $_POST['name'];
    }
    //Min 27. carpeta vuew. index estructura cipri.
}

?>