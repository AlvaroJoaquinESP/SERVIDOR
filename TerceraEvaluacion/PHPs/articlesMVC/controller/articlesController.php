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


    /**
     * Method for show ererything in the controller view.
     */
    public function showEditArticle() 
    {
        require_once("view/articlesHeader.php");
        $article = $this->articlesRepository->list();
        require_once("view/articlesEdit.php");
        require_once("view/articlesFooter.php");
    }


    public function editArticle()
    {
        $article = $this->articlesRepository->edit($_REQUEST['stock'], $_REQUEST['select']);
        
        (new ArticleController())->listArticle(); // POR QUE SI QUE ME VA CON ESE MÉTODO, SI ESTOY LLAMANDO AL METODO LIST. CREO QUE SI TIENE SENTIDO PERDON CIPRI.
        // require_once("view/articlesHeader.php");
        // require_once("view/articlesList.php"); NO VA.
        // require_once("view/articlesFooter.php");
    }


    public function deleteArticle()
    {
        $article = $this->articlesRepository->delete($_REQUEST['id']);
        // header("Location: " . BASE_URL . "/articles/list");
        (new ArticleController())->listArticle();

    }


    public function showAdd()
    {
        require_once("view/articlesHeader.php");
        require_once("view/articlesAdd.php");
        require_once("view/articlesFooter.php");
    }

    
    public function add()
    {
        if (!($this->articlesRepository->verify($_REQUEST['name']))) {
            $article = (new Article())->setName($_REQUEST['name'])->setDescription($_REQUEST['description'])->setStock($_REQUEST['stock'])->setPrice($_REQUEST['price']);
            $this->articlesRepository->add($article);

            (new ArticleController())->listArticle();

            // require_once("view/articlesHeader.php");
            // (new ArticleController())->showList();
            // require_once("view/articlesFooter.php");
            
        } else {
            require_once("view/articlesList.php");
        }
    }


}
