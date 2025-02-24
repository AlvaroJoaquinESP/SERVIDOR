<?php

require_once("../repository/userRepository.php");
//  chatGPT: require_once(__DIR__ . "/../repository/userRepository.php");
class UserController {
    
    // Cargo el login
    public function login() {
        require_once("../view/login.php");
    }

    // Validar los datos introducidos

    public function validate() {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $user =(new User())->setName($_POST['name'])->setPassword($_POST['password']);
        (new UserRepository())->validateUser($user);   
        }

        
    }
}

?>