<?php

require_once("app/Model/MaterialesModel.php");
require_once("app/Model/PedidosModel.php");
require_once("app/View/View.php");

class Controller
{

    private $view;
    private $materialesModel;
    private $pedidosModel;

    function __construct()
    {
        $this->view = new View();
        $this->materialesModel = new MaterialesModel();
        $this->pedidosModel = new PedidosModel();
    }


    private function materiales()
    {
        return $this->materialesModel->getMateriales();
    }

    function showHome()
    {
        $this->view->renderHome($this->isUserLoggedIn(), $this->materiales());
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


    public function AgregarMaterial()
    {

        $material = $_POST['material'];
        $aceptado = $_POST['aceptado'];
        $condicion = $_POST['condicion'];



        if (!empty($material) && !empty($condicion)) {


            $this->materialesModel->AgregarMaterial($material, $aceptado, $condicion);

            header("Location: " . BASE_URL . "home");
        } else {
            header("Location: " . BASE_URL . "home");
        }
    }
}
