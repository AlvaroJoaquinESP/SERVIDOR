<?php
require_once("config/config.php");
require_once("model/article.php");

class ArticleRepository {

    private function getPDO()
    {
        return (new ConfigDB())->getInstance();
    }

    
}

?>