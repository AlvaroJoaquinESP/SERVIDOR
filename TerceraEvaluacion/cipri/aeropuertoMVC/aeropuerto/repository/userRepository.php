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

        $sql = "SELECT * FROM USER WHERE NAME = ? AND PASS=?";
        $consulta = $conex->prepare($sql);
        $consulta->bindValue(1, $name);
        // Codifico la contraseña, aquí o al pasarla por parámetro en userController.
        $consulta->bindValue(2, md5($pass));
        $consulta->execute();
        // Esto devuelve un array asociativo.
        $user = $consulta->fetch();

        /**
        * Para que no devuelva un array asociativo, hago que devuelva un objeto de tipo User.
        * ¿Tendría que meterlo en una variable mejor? ¿O lo que devuelvo es $user?
        * Si ha encontrado el usuario en BBDD lo devuelve.
        */
        print_r($user);
        if (isset($user)) {
            
            $user1 = new User($user['id'],$user['name'],$user['pass'],$user['role']);
        } else {
            $user1 = null;
        }

        // ¿Si no lo encuentra null?
        return $user1;

    }
}


?>