<?php
require_once("repository/carRepository.php");

class CarController
{

    private $carRepository;

    public function __construct()
    {
        $this->carRepository = new CarRepository();
    }


    public function welcomeCar()
    {
        require_once("view/carHeader.php");
        echo "<p>¡Bienvenido <b>" . $_SESSION['name'] . ".!</b></p>";
        require_once("view/carFooter.php");
    }


    public function showCarList()
    {
        require_once("view/carHeader.php");
        $car = ($this->carRepository)->getAll(); //variable para recorrerlo en la lista.
        require_once("view/carList.php");
        require_once("view/carFooter.php");
    }


    public function addForm()
    {
        require_once("view/carHeader.php");
        // Desde aquí llamo al método insertCar() a través del formulario.
        require_once("view/carAdd.php");
        require_once("view/carFooter.php");
    }


    public function addCar()
    {
       /**
        * Lógica
        */
        $car = (new Car())->setModel($_REQUEST['model'])->setBrand($_REQUEST['brand'])->setYear($_REQUEST['year'])->setStock($_REQUEST['stock']);
        $result = $this->carRepository->insert($car);


        $message = "";
        if ($result) {
            $message = "Introducido con éxito el coche con id: " . $_REQUEST['id'];
        } else {
            $message = "Error al introducir el coche con id: " . $car->getId();
        }

        /**
         * Vista
         */

         require_once("view/carHeader.php");
        //  require_once("view/carList.php"); ASÍ NO, YA QUE SALE VACÍO...
        (new CarController())->showCarList();
         require_once("view/carFooter.php");
    }


    public function deleteCar()
    {
        $result = $this->carRepository->delete($_REQUEST['id']);
        
        $message = "";
        if ($result) {
            $message = "Eliminado con éxito el coche con id: " . $_REQUEST['id'];
        } else {
            $message = "Error al eliminar el coche con id: " . $_REQUEST['id'];
        }

        require_once("view/carHeader.php");
        (new CarController())->showCarList();
         require_once("view/carFooter.php");
    }
}
