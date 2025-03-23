<?php

require_once("model/user.php");
require_once("helper/util.php");

class UserRepository {

    /* Comprobar que los datos introducidos del usuario existen en BBDD. */
    public function validateUser($user) {
        
        $query = Util::getConex()->prepare("SELECT * FROM USER WHERE NAME=? AND PASSWORD=?");

        // Se colocan los valores de los ? de la consulta.
        // Rellena el primer ?
        $query->bindValue(1, $user->getName());
        // Rellena el segundo ? y convierte la contraseña en un código.
        $query->bindValue(2, md5($user->getPassword()));

        // Ejecuto la consulta. Busco en la BBDD si hay un usuario con ese nombre y contraseña.
        $query->execute();

        // Guardo el resultado de la búsqueda en $result.
        // Si el usuario existe, se guarda en $result.
        $result = $query->fetch();

        
        // Si encontramos un usuario, creamos un nuevo User.
        //¿Cómo sabe isset que tiene que buscar un usuario en $result?

        // isset verifica que $result contenga algo(exista) y tenga un valor != null.
        if(isset($result)) {
            $result = new User($result['id'],$result['name'],$result['pass'],$result['role']);
        }
        return $result;
    }

}

?>