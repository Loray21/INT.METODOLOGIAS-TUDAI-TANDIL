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

    function showform()
    {
        $this->view->form();
    }



    public function AgregarMaterial()
    {

        $material = $_POST['material'];
        $aceptado = $_POST['aceptado'];
        $condicion = $_POST['condicion'];



        if (!empty($material) && !empty($aceptado) && !empty($condicion)) {

            $this->materialesModel->AgregarMaterial($material, $aceptado, $condicion);
            $this->view->showExito("se ha insertado correctamente");
        } else {
            $this->view->showError("debe completar todos los campos");
        }
    }
}
