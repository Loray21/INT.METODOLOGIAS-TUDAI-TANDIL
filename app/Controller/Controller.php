<?php

require_once("app/Model/MaterialesModel.php");
require_once("app/Model/CartoneroModel.php");
require_once("app/Model/PedidosModel.php");
require_once("app/Model/CartoneroModel.php");
require_once("app/Model/materialPorCartoneroModel.php");
require_once("app/View/View.php");


class Controller
{

    private $view;
    private $materialesModel;
    private $pedidosModel;
    private $cartoneroModel; 
    private $materialPorCartoneroModel;

    function __construct()
    {
        $this->view = new View();
        $this->materialesModel = new MaterialesModel();
        $this->pedidosModel = new PedidosModel();
        $this->cartoneroModel = new CartoneroModel();
        $this->materialPorCartoneroModel = new materialPorCartoneroModel();
    }

    private function materiales()
    {
        return $this->materialesModel->getMateriales();
    }

    public function showHome()
<<<<<<< HEAD
    { 
        $this->view->renderHome($this->isUserLoggedIn(), 
                                $this->materiales(),
                                $this->materialesModel->getMaterialesAceptados(),
                                $this->cartoneroModel->getCartoneros(),
                                $this->pedidosModel->getPedidos(),
                                $this->materialPorCartoneroModel->getMaterialesPorCartonero()
            );
=======
    {
        $this->view->renderHome(
            $this->isUserLoggedIn(),
            $this->materiales(),
            $this->materialesModel->getMaterialesAceptados(),
            $this->cartoneroModel->getCartoneros(),
            $this->pedidosModel->getPedidos()
        );
>>>>>>> 6ba27fa6ccd7f4e7ce43683fc7c44c8a2addd776
    }

    function agregarMaterialRecolectado()
    {
        $peso =    $_POST['peso'];
        $materialId =  $_POST['materialId'];
        $cartoneroId = $_POST['cartoneroId'];
        if (isset($peso) && isset($materialId) && isset($cartoneroId)) {
            if (true) {
                $this->materialesModel->agregarMaterialRecolectado($peso,  $materialId, $cartoneroId);
            }
        }
        header("Location: " . BASE_URL . "home");
    }

    function login()
    { // el usuario y contraseña están hardcodeados
        // nombre: Cecilia
        // contraseña: contraseña
        $name_enteder = $_POST["user"];
        $pass_enteder = $_POST["pass"];
        if (isset($name_enteder) && isset($name_enteder)) {
            $name = "Cecilia";
            $pass = '$2y$10$nZa.YTKJRlVcR9JyaUoH3OXnwVdbcIDEqrjXZ7dit/pPVJUTvjRVm'; // la contraseña es contraseña
            if ((password_verify($pass_enteder, $pass)) && ($name_enteder == $name)) {
                session_start();
                $_SESSION['NAME'] = $name;
            }
        }
        header("Location: " . BASE_URL . "home");
    }

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "home");
    }

    function isUserLoggedIn()
    {
        session_start();
        return isset($_SESSION['NAME']) == true;
    }

    function checkLoggedIn()
    {
        session_start();
        if (!$this->isUserLoggedIn()) {
            header("Location: " . BASE_URL . "home");
            die();
        }
    }

    public function agregarMaterial()
    {
        $material = $_POST['material'];
        $aceptado = $_POST['aceptado'];
        $condicion = $_POST['condicion'];

        if (!empty($material) && !empty($condicion)) {
            $this->materialesModel->agregarMaterial($material, $aceptado, $condicion);
        }

        header("Location: " . BASE_URL . "home");
    }

    public function agregarPedido()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $calle = $_POST['calle'];
        $numero = $_POST['numero'];
        $telefono = $_POST['telefono'];
        $franja_horaria = $_POST['franja_horaria'];
        $categoria_volumen = $_POST['categoria_volumen'];
        $imagen = $_POST['imagen'];
        if (!empty($nombre)  && !empty($apellido) && !empty($calle) && !empty($telefono) && !empty($franja_horaria) && !empty($categoria_volumen)) {
            if (!empty($imagen)) {
                $this->pedidosModel->guardarPedido($nombre, $apellido, $calle, $numero, $telefono, $franja_horaria, $categoria_volumen, $imagen);
            } else {
                $imagen = null;
                $this->pedidosModel->guardarPedido($nombre, $apellido, $calle, $numero, $telefono, $franja_horaria, $categoria_volumen, $imagen);
            }
        }
        header("Location: " . BASE_URL . "home");
    }

    public function removeMaterial($materialId = null)
    {
        $this->materialesModel->removeMaterial($materialId);
        header("Location: " . BASE_URL . "home");
    }

    public function update()
    {

        $id = $_POST['materialId'];

        $name = $_POST['materialName'];
        $accepted = $_POST['materialAccepted'];

        if (isset($name) && isset($accepted)) {
            $this->materialesModel->update($id, $name, $accepted);
        }

        header("Location: " . BASE_URL . "home");
<<<<<<< HEAD
    } 
=======
    }


    public function agregarCartonero()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $franja_horaria = $_POST['franja_horaria_preferida'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];
        $vehiculo = $_POST['vehiculo'];

        $this->cartoneroModel->agregarCartonero($nombre, $apellido, $direccion, $telefono, $franja_horaria, $dni, $vehiculo);

        header("Location: " . BASE_URL . "home");
    }
>>>>>>> 6ba27fa6ccd7f4e7ce43683fc7c44c8a2addd776
}
