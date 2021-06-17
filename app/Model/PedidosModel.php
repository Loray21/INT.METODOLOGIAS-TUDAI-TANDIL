<?php

    require_once("app/Helper/DataBaseHelper.php");

    class PedidosModel {

        private $db;

        function __construct() {
            $this->db = DataBaseHelper::connection();
        }

        function guardarPedido($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria_volumen, $imagen) {
            $query = $this->db->prepare("INSERT INTO pedido(nombre, apellido, direccion, telefono, franja_horaria, categoria_volumen, imagen) VALUES (?,?,?,?,?,?,?)");
            $query->execute(array($nombre, $apellido, $direccion, $telefono, $franja_horaria, $categoria_volumen, $imagen));
            return $this->db->lastInsertId();
        }

        function getPedidos(){
            $query = $this->db->prepare("SELECT * from pedido");
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_OBJ);
        }

    }
