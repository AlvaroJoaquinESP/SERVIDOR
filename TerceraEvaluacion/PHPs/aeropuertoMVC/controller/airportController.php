<?php

require_once("repository/airportRepository.php");

class AirportController
{
    private $airportRepository;

    public function __construct()
    {
        $this->airportRepository = new AirportRepository();
    }

    public function showList()
    {
        // Esta variable es la que recorro en airportList.php;
        $aeropuerto = ($this->airportRepository)->getAll();
        require_once("view/airportList.php");
    }

    public function welcome()
    {
        require_once("view/airportHeader.php");
        echo "Bienvenido " . "<b>" . $_SESSION['name'] . "</b>" . ", seleccione una opción.";
        require_once("view/airportFooter.php");
    }

    // Cargo el formulario.
    public function add()
    {
        require_once("view/airportHeader.php");
        require_once("view/airportAdd.php");
        require_once("view/airportFooter.php");
    }

    // Inserto en BBDD y hago las operaciones en BD.
    public function insertAirport()
    {

        if (!($this->airportRepository->verify($_POST['location']))) {

            $aeropuerto = (new Airport())->setLocation($_POST['location'])->setNumRoad($_POST['numRoad'])->setGateway($_POST['gateway']);

            $result = ($this->airportRepository)->addAirport($aeropuerto);


            $message = "";
            if ($result) {
                $_SESSION['message'] = $message;
                $message = "Insertado correctamente el aeropuerto: <b>" . $_POST['location'] . "</b>";
            } else {
                $message = "Error al insertar";
            }


            // Llamo a la vista.
            require_once("view/airportHeader.php");
            // require_once("view/airportAdd.php");   Si aquí pongo airportList.php, no me sale nada.
            (new AirportController())->showList();
            require_once("view/airportFooter.php");
        } else {

            echo "El aeropuerto " . $_POST['location'] . " ya existe";
            $this->showList();
        }
    }

    public function deleteAirport($id)
    {
        // Para sacar el nombre del aeropuerto y poder mostrar un PopUp, diciendo si está seguro de eliminar ese aeropuerto.(SEGURIDAD).
        $aeropuerto = $this->airportRepository->findById($id);
        // Lógica del controller.
        $result = $this->airportRepository->delete($id);

        $message = "";
        if ($result) {
            $message = "Borrado correctamente el aeropuerto: <b>" . $aeropuerto->getLocation() . "</b>";
        } else {
            $message = "Error al borrar el aeropuerto: <b>" . $aeropuerto->getLocation() . "</b>";
        }

        // Muestro la vista.
        require_once("view/airportHeader.php");
        (new AirportController())->showList();
        require_once("view/airportFooter.php");
    }

    public function searchAirport()
    {

        require_once("view/airportHeader.php");

        require_once("view/airportSearch.php");
        if (isset($_REQUEST["location"])) {
            // Se llama igual que el array que recorro en airportList.
            $aeropuerto = $this->airportRepository->findByLocation($_REQUEST['location']);
            require_once("view/airportList.php");
            require_once("view/airportFooter.php");
        } else {
            
        }

    }
}
