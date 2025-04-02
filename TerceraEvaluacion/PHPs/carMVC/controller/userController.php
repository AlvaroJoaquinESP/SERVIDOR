<?php
require_once("repository/userRepository.php");
class UserController {

    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function validateUser()
    {
        $user = $this->userRepository->validate($_REQUEST['name'], $_REQUEST['password']);

        if (isset($user)) {
            $_SESSION['name'] = $user->getName();
            $_SESSION['role'] = $user->getRole();
            header("Location: " . BASE_URL . "/airport/welcome");
        } else {
            echo "Usuario NO loggeado";
        }
    }

    public function showLogin()
    {
        if (!isset($_SESSION['name'])) {
            require_once("view/login.php");
        } 
    }
}


?>