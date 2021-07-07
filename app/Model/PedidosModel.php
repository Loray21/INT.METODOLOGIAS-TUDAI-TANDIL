<?php

    require_once("app/Helper/DataBaseHelper.php");

    class PedidosModel {

        private $db;

        function __construct() {
            $this->db = DataBaseHelper::connection();
        }

        function guardarPedido($nombre, $apellido, $calle, $numero, $telefono, $franja_horaria, $categoria_volumen, $imagen) {
            $calleValida =  $this->isCalleValida($calle, $numero);
            if(isset($calleValida)&&($calleValida)) {
                $query = $this->db->prepare("INSERT INTO pedido(nombre, apellido, direccion, numero, telefono, franja_horaria, categoria_volumen, imagen) VALUES (?,?,?,?,?,?,?,?)");
                $query->execute(array($nombre, $apellido, $calle, $numero, $telefono, $franja_horaria, $categoria_volumen, $imagen));
                return $this->db->lastInsertId();
            }
        }

        function getPedidos(){
            $query = $this->db->prepare("SELECT * from pedido");
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_OBJ);
        }

        function isCalleValida($calle, $numero) {
            $query = $this->db->prepare("SELECT 1 from area WHERE calle = ? AND ? BETWEEN numero_menor AND numero_mayor");
            $query->execute(array($calle, $numero));
            return $query->fetch(PDO::FETCH_OBJ);
        }

    }
