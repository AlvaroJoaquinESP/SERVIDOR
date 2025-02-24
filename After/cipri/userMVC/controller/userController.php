<?php

require_once("../repository/userRepository.php");
class UserController {
    
    // Cargo el login
    public function login() {

    }

    // Validar los datos introducidos

    public function validate() {
        $_POST['name'];
        $_POST['password'];
        (new UserRepository())->validateUser($user);
        
    }
    //Min 27. carpeta view. index estructura cipri.
}

?>