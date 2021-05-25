<?php

require_once('libs/smarty/libs/Smarty.class.php');

    class View {
        
        private $smarty;
    
        function __construct() {
            $this->smarty = new Smarty();
        }

        function showMateriales ( $materiales=null, $rol=false ) { 
            //$this->smarty->assign('BASE_URL' , BASE_URL);
            $this->smarty->assign('materiales' , $materiales); 
            $this->smarty-> assign ( 'admin', $rol );
            $this->smarty->display( './app/templates/materiales.tpl' );
        }

    }
