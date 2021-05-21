<?php

    require_once("app/Helper/DataBaseHelper.php");

    class PedidosModel {

        private $db;

        function __construct() {
            $this->db = DataBaseHelper::connection();
        }

    }
?>


