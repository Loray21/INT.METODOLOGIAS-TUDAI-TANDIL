<?php

    require_once("app/Model/MaterialesModel.php");
    require_once("app/Model/PedidosModel.php");
    require_once("app/View/View.php");

    class Controller{

        private $view;
        private $materialesModel;
        private $pedidosModel;

        function __construct() {
            $this->view = new View();
            $this->materialesModel = new MaterialesModel();
            $this->pedidosModel = new PedidosModel();
        }

    
    }
