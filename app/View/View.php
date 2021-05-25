<?php

require_once('libs/smarty/libs/Smarty.class.php');

    class View {
        
        private $smarty;
    
        function __construct(){
            $this->smarty = new Smarty();
        }

        function renderHome($isUserLoggedIn) {
            $this->smarty->assign("BASE_URL", BASE_URL);
            $this->smarty->assign("isUserLoggedIn", $isUserLoggedIn );
            $this->smarty->display("templates/page.tpl");
        }
    }
?>