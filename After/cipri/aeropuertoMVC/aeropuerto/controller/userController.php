<?php
require_once("repository/userRepository.php");
class UserController
{

   public function showLogin()
   {
      require_once("view/login.php");
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
         echo "Usuario loggeado";
      } else {
         echo "Usuario NO loggeado";
      }
   }
}
