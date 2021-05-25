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

        function showHome() {
            $isUserLoggedIn = $this->isUserLoggedIn();
            $this->view->renderHome($isUserLoggedIn);
        }

        function login(){ // el usuario y contraseña están hardcodeados
            // nombre: Cecilia
            // contraseña: contraseña
            $name_enteder = $_POST["user"];       
            $pass_enteder = $_POST["pass"];
            if(isset($name_enteder)&&isset($name_enteder)){ 
                $name = "Cecilia";
                $pass = '$2y$10$nZa.YTKJRlVcR9JyaUoH3OXnwVdbcIDEqrjXZ7dit/pPVJUTvjRVm';// la contraseña es contraseña
                if ((password_verify($pass_enteder, $pass)) && ($name_enteder == $name)){
                    session_start();
                    $_SESSION['NAME'] = $name;
                }
            } 
            header("Location: ".BASE_URL."home");
        }

        function logout(){
            session_start();
            session_destroy();
            header("Location: ".BASE_URL."home");
        }
    
        function isUserLoggedIn() {
            session_start();
            return isset($_SESSION['NAME']) == true;
        }
        
        function checkLoggedIn(){
            session_start();
            if(!$this->isUserLoggedIn()) {
                header("Location: ".BASE_URL."home");
                die();
            }
        } 
    }

