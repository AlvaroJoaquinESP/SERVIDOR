<?php
require_once("repository/songRepository.php");

class SongController {

    private $songRepository;

    public function __construct()
    {
        $this->songRepository = new SongRepository();
    }


    public function welcome()
    {
        require_once("view/songHeader.php");
        echo "<p class='text'>Bienvenido. Por favor, seleccione una opción del menú.</p>";
        require_once("view/songFooter.php");
    }


    public function showList()
    {
        require_once("view/songHeader.php");
        $songs = $this->songRepository->getAll();
        require_once("view/songList.php");
        require_once("view/songFooter.php");
    }


    public function showAdd()
    {
        require_once("view/songHeader.php");
        require_once("view/songAdd.php");
        require_once("view/songFooter.php");
    }


    public function addSong()
    {
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $dedication = $_POST['dedication'];

        $songs = $this->songRepository->add($title, $artist, $dedication);

        $this->showList();

    }


    public function deleteSong()
    {
        $id = $_REQUEST['id'];
        $this->songRepository->delete($id);
        header("Location: " .BASE_URL. "/song/list");
    }


    public function emitSong()
    {
        $id = $_REQUEST['id'];
        $songs = $this->songRepository->emit($id);
        $this->showList();
    }
}


?>