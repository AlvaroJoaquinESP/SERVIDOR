<?php
require_once("repository/bookRepository.php");

class BookController
{

    private $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    public function welcome()
    {
        require_once("view/bookHeader.php");
        echo "<p>Welcome Sr: <b>" . $_SESSION['name'] . "</b>. Select one option, please.</p>";
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
        header("Location: " . BASE_URL . "/book/list");
    }


    public function showAdd()
    {
        require_once("view/bookHeader.php");
        require_once("view/bookAdd.php");
        require_once("view/bookFooter.php");
    }


    public function add()
    {
        $title = $_REQUEST['title'];
        $author = $_REQUEST['author'];
        $year = $_REQUEST['year'];
        $pages = $_REQUEST['pages'];
        if (!$this->bookRepository->verify($year)) {
            $this->bookRepository->add((new Book())->setTitle($title)->setAuthor($author)->setYear($year)->setPages($pages));
            header("Location: " . BASE_URL . "/book/list");
        } else {
            echo "Hello Cipri";
        }


        
    }


    public function showEdit()
    {
        require_once("view/bookHeader.php");
        $book = $this->bookRepository->findById($_REQUEST['id']);
        require_once("view/bookEdit.php");
        require_once("view/bookFooter.php");
    }

    public function editBook()
    {
        require_once("view/bookHeader.php");
        $pages = $_REQUEST['pages'];
        $author = $_REQUEST['author'];
        $id = $_REQUEST['id'];

        echo $pages, $author, $id;

        $this->bookRepository->edit($pages,$author,$id);
        header("Location: " . BASE_URL . "/book/list");

    }


    public function showSearch()
    {
        require_once("view/bookHeader.php");
        require_once("view/bookSearch.php");
        require_once("view/bookFooter.php");
    }


    public function searchBook()
    {
        $author = $_REQUEST['author'];
        require_once("view/bookHeader.php");
        $books = $this->bookRepository->search($author);
        require_once("view/bookList.php");
        require_once("view/bookFooter.php");
    }


    public function showUpdate()
    {
        require_once("view/bookHeader.php");
        $books = $this->bookRepository->getAll();
        require_once("view/bookUpdate.php");
        require_once("view/bookFooter.php");
    }


    public function updateBook()
    {
        $id = $_REQUEST['select'];
        $pages = $_REQUEST['pages'];
        $this->bookRepository->update($id, $pages);
        header("Location: " . BASE_URL . "/book/list");
    }


    public function showImport()
    {
        require_once("view/bookHeader.php");
        $this->bookRepository->getAll();
        require_once("view/bookImport.php");
        require_once("view/bookFooter.php");
    }
}
