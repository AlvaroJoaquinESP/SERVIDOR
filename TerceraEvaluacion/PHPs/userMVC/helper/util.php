<?php
require_once("./config/configDB.php");

class Util {

    public static function getConex() {
       return (new configDB()) -> getInstance();
    }

}


?>