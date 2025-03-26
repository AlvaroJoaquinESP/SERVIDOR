<?php
require_once("repository/userRepository.php");
class UserController
{

   public function showLogin()
   {
      if (!isset($_SESSION['logged'])) {
         require_once("view/login.php");
      }else {
         (new AirportController())->showList();
      }
      
   }

   /**
    * Llamar a BBDD 
    */
   public function validate() 
   {
      $repository = new UserRepository();
      // Los valores del login.
      $user = $repository->validate($_POST['name'], $_POST['password']);

      if (isset($user)) {
         $_SESSION['logged'] = true;
         $_SESSION['name'] = $user->getName();
         echo "Usuario loggeado";
         // Alternativa para redirigir;
         // (new AirportController())->showList();
         // Cambiar showList() por welcome() <- Así creo que no hace falta tocar el .htaccess.
         header("Location:" . BASE_URL . "/airport/welcome");
      } else {
         echo "Usuario NO loggeado";
      }
   }

   public function destroy()
   {
      session_destroy();
      header("Location:" . BASE_URL . "/user/login");
   }
}
