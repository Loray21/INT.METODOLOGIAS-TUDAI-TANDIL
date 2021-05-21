<?php

    require_once("app/Helper/DataBaseHelper.php");
    
    class MaterialesModel {

        private $db;

        function __construct() {
            $this->db = DataBaseHelper::connection();
        }

    }
?>


