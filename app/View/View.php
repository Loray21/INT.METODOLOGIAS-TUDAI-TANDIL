<?php

require_once('libs/smarty/libs/Smarty.class.php');

    class View {
        
        private $smarty;
    
        function __construct(){
            $this->smarty = new Smarty();
        }

        public function showFormPedido(){
            $this->smarty->assign('titulo', 'Agregar Pedido');
            $this->smarty->display('templates/formAgregarPedido.tpl');
        }

        public function mostrarError($msgError) {
            echo "<h1>ERROR!</h1>";
            echo "<h2>{$msgError}</h2>";
        }
        
    }
?>