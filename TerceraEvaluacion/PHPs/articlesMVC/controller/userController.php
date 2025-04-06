<?php
require_once("repository/userRepository.php");

class UserController {

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }


    public function showLogin()
    {
        require_once("view/login.php");
    }


    public function validateUser()
    {
        $name = $_REQUEST['name'];
        $pass = $_REQUEST['password'];
        $user = $this->userRepository->validate($name ,md5($pass));

        if ($user) {
            $_SESSION['name'] = $user->getName();
            $_SESSION['rol'] = $user->getRol();
            header("Location: " . BASE_URL . "/articles/welcome");
        } else {
            header("Location: " . BASE_URL . "/view/login.php"); 
        }
    }

    public function destroy()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/user/login");
    }




}


?>