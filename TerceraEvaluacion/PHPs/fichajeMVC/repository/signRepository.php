<?php
require_once("config/ConfigDB.php");
require_once("model/sign.php");

class SingRepository {
    /**
     * Conexión a BBDD.
     */
    public function validate($name, $pass)
    {
        $conex = (new ConfigDB())->getInstance();

        // $sql = "SELECT count(*) FROM user WHERE name = ':name' AND pass = ':pass'";
        $sql = "SELECT * FROM usuarios WHERE nombre = ? AND password_hash = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $name);
        // Codifico la contraseña, aquí o al pasarla por parámetro en userController.
        $consulta->bindValue(2, md5($pass));
        $consulta->execute();
        // Esto devuelve un array asociativo.
        $user = $consulta->fetch();
   
        return (!empty($user)) ? new User($user['id'],$user['name'],$user['pass'],$user['email'], $user['created_at'], $user['updated_at'],) : null;
     
        /**
        * Para que no devuelva un array asociativo, hago que devuelva un objeto de tipo User.
        */

    }
}


?>