<?php
require_once("repository/userRepository.php");
class UserController
{
    public function show()
    {
        //Se carga la pantalla de login
        include_once("view/login.php");
    }

    public function validate()
    {
        //Se valida el usuario y contraseña, ademas se guarda en sesión el nombre y rol del usuario, 
        // despues se redirige a la pantalla de inicio
        $repository = new UserRepository();
        $user = $_POST["usuario"];
        $pass = $_POST["pass"];
        $found = $repository->validate($pass, $user);
        if ($found) {
            $_SESSION["name"] = $found->getName();
            $_SESSION["rol"] = $found->getRol();
            $url = BASE_URL . "article/default";
            header("Location: " . $url);
        } else {
            $message = "Credenciales invalidas";
            include_once("view/login.php");
        }
    }

    public function logout()
    {
        //Se cierra la sesión y se redirige a la pantalla de login
        session_destroy();
        $url = BASE_URL . "user/show";
        header("Location: " . $url);
    }
}
