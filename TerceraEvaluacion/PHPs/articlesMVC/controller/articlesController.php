<?php
require_once("repository/articlesRepository.php");

class ArticleController
{

    private $articlesRepository;

    public function __construct()
    {
        $this->articlesRepository = new ArticleRepository();
    }


    public function welcome()
    {
        require_once("view/articlesHeader.php");
        echo "<h2 class='text text-center'>Welcome " . $_SESSION['name'] . ". Please, select one option.</h2>";
        require_once("view/articlesFooter.php");
    }


    public function listArticle()
    {
        require_once("view/articlesHeader.php");
        $article = $this->articlesRepository->list();
        require_once("view/articlesList.php");
        require_once("view/articlesFooter.php");
    }


    public function showEditArticle()
    {
        require_once("view/articlesHeader.php");
        $article = $this->articlesRepository->list();
        require_once("view/articlesEdit.php");
        require_once("view/articlesFooter.php");
    }


    public function editArticle()
    {
        $result = $this->articlesRepository->edit($_REQUEST['stock'], $_REQUEST['select']);
        
  
        require_once("view/articlesHeader.php");
        require_once("view/articlesEdit.php");
        require_once("view/articlesFooter.php");
    }


}
