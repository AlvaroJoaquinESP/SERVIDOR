<?php
require_once("repository/userRepository.php");

class UserController
{

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }


    public function showLogin()
    {
        if (!isset($_SESSION['logged'])) {
            require_once("view/login.php");
        } else {
            (new ArticleController())->welcome();
        }


    }


    public function validateUser()
    {
        $name = $_REQUEST['name'];
        $pass = $_REQUEST['password'];
        $user = $this->userRepository->validate($name, md5($pass));

        if (isset($user)) {
            $_SESSION['logged'] = true;
            $_SESSION['name'] = $user->getName();
            $_SESSION['rol'] = $user->getRol();
            header("Location: " . BASE_URL . "/articles/welcome");
        } else {
            $message ="Credenciales incorrectas";
            require_once("view/login.php");
        }
    }

    public function destroy()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/user/login");
    }
}
