<?php
require_once("repository/userRepository.php");
class UserController
{

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function validateUser()
    {
        $name = $_REQUEST['name'];
        $pass = $_REQUEST['password'];
        $user = $this->userRepository->validate($name, $pass);

        if (isset($user)) {
            $_SESSION['logged'] = true; // Para cerrar sesión.
            $_SESSION['name'] = $user->getName();
            $_SESSION['role'] = $user->getRole();
            header("Location: " . BASE_URL . "/car/welcome");
        } else {
            require_once("view/login.php");
            echo "<p class='alert alert-warning'>Usuario NO loggeado</p>";
        }
    }


    public function showLogin()
    {
        if (!isset($_SESSION['name'])) {
            require_once("view/login.php");
        }
    }


    public function destroy()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/user/login");
    }
}
