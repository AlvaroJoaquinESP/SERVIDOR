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
        // if (!$_SESSION['logged']) {
        //     require_once("view/login.php");
        // } else {

        // }

        require_once("view/login.php");
    }


    public function validateUser()
    {
        $name = $_REQUEST['name'];
        $pass = $_REQUEST['password'];
        $user = $this->userRepository->validate($name, $pass);

        if (isset($user)) {
            $_SESSION['name'] = $user->getName();
            $_SESSION['role'] = $user->getRole();
            header("Location: " . BASE_URL . "/book/home");
        } else {
            $message = "Credenciales incorrectas";
            header("Location: " . BASE_URL . "/user/login");
        }
    }


    public function destroy()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/user/login");
    }
}
