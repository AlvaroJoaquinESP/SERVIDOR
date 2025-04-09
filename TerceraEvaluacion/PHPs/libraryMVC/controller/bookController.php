<?php
require_once("repository/bookRepository.php");

class BookController {

    private $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    public function welcome()
    {
        require_once("view/bookHeader.php");
        echo "<p>Welcome Sr: <b>". $_SESSION['name'] ."</b>. Select one option, please.</p>";
        require_once("view/bookFooter.php");

    }


    public function bookList()
    {
        require_once("view/bookHeader.php");
        $books = $this->bookRepository->getAll();
        require_once("view/bookList.php");
        require_once("view/bookFooter.php");
    }


    public function bookDelete()
    {
        $id = $_REQUEST['id'];
        $this->bookRepository->delete($id);
        header("Location: " . BASE_URL ."/book/list");
    }


    public function add()
    {
        $id = $_REQUEST['id'];
        $this->bookRepository->delete($id);
        header("Location: " . BASE_URL ."/book/list");
    }
}


?>