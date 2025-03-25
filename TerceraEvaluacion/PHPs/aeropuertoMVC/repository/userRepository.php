<?php
require_once("config/ConfigDB.php");
require_once("model/user.php");

class UserRepository {
    /**
     * Conexión a BBDD.
     */
    public function validate($name, $pass)
    {
        $conex = (new ConfigDB())->getInstance();

        // $sql = "SELECT count(*) FROM user WHERE name = ':name' AND pass = ':pass'";
        $sql = "SELECT * FROM user WHERE name = ? AND pass = ?";
        $consulta = $conex->prepare($sql);
        $consulta->bindParam(1, $name);
        // Codifico la contraseña, aquí o al pasarla por parámetro en userController.
        $consulta->bindParam(2, md5($pass));
        $consulta->execute();
        // Esto devuelve un array asociativo.
        $user = $consulta->fetch();
   
        return (!empty($user)) ? new User($user['id'],$user['name'],$user['pass'],$user['role']) : null;
     
        /**
        * Para que no devuelva un array asociativo, hago que devuelva un objeto de tipo User.
        * ¿Tendría que meterlo en una variable mejor? ¿O lo que devuelvo es $user?
        * Si ha encontrado el usuario en BBDD lo devuelve.
        */



        // ¿Si no lo encuentra null?

    }
}


?>