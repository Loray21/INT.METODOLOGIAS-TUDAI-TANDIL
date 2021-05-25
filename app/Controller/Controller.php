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

        public function showFormPedido(){
            $this->view->showFormPedido();
        }

        public function agregarPedido() {
        
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $franja_horaria = $_POST['franja_horaria'];
            $categoria_volumen = $_POST['categoria_volumen'];
            $imagen = $_POST['imagen'];
    
            if (!empty($nombre)  && !empty($apellido) && !empty($direccion) && !empty($telefono) && !empty($franja_horaria) && !empty($categoria_volumen)) {
                if(!empty($imagen)){
                    $this->pedidosModel->guardarPedido($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria_volumen, $imagen);   
                } else{
                    $imagen = null;
                    $this->pedidosModel->guardarPedido($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria_volumen, $imagen);
                }
                //header("Location: " . EQUIPOS);
                die();
            }
            else {
                $this->view->mostrarError("Faltan datos obligatorios");
            }
        }

    }
