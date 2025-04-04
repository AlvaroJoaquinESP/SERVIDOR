<?php
require_once("repository/articlesRepository.php");

class ArticleController {

    private $articlesRepository;

    public function __construct()
    {
        $this->articlesRepository = new ArticleRepository();
    }


    public function welcome()
    {
        require_once("view/articlesHeader.php");
        echo "<h2 class='text'>Welcome: " . $_SESSION['name'] . "Please, select one option.</h2>";
        require_once("view/articlesFooter.php");
    }

}

?>