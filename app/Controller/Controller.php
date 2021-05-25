<?php

    require_once("app/Model/MaterialesModel.php");
    require_once("app/Model/PedidosModel.php");
    require_once("app/View/View.php");

    class Controller{

        private $view;
        private $materialesModel;
        private $pedidosModel;
        private $admin;

        function __construct() {
            $this->view = new View();
            $this->materialesModel = new MaterialesModel();
            $this->pedidosModel = new PedidosModel();
            $this->admin = false;
        } 

        function materiales () { 
            
            $this->view->showMateriales( $this->materialesModel->getMateriales(), $this->admin ); 
        }

    
    }
