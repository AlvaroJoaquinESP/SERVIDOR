<?php

require_once("repository/userRepository.php"); 
class UserController
{

    // Cargo el login.
    public function login()
    {
        require_once("view/login.php");
    }

    // Validar los datos introducidos.

    public function validate()
    {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $user = (new User())->setName($_POST['name'])->setPassword($_POST['password']);
            $user = (new UserRepository())->validateUser($user);



            /* Una vez que lo valido, lo normal es que lo mande a mi pantalla por defecto.
            Tengo varias formas:
                
                1ª-> Podria invocar al controlador con new controller y llamar al metodo con la flechita.(Clase Cipri. Min.46:40).
                min:50*/

            if (isset($user)) {

                /**Guardar los datos del usuario en sesión.
                 * ¿Guardo solo uno de estos o guardo los 3?
                 * ¿Refactorizo el codigo en un fichero único de funciones?
                 * ¿Por qué recibe $user?
                 * ¿Por qué inicio sesion en el index.php?
                 * min 55:30-> pasa al product. Enunciado del ejercicio min 56:08.
                 */
                $_SESSION['role'] = $user->getRole();
                $_SESSION['name'] = $user->getName();
                $_SESSION['logged'] = true; // Creo una variable de sesion y la pongo a true.

                /*Redireccionar a la pantalla por defecto. */
                $url = BASE_URL . "/producto/lista";
                header("Location:" . $url);
            }

        }
    }
}
