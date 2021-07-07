<?php

require_once("app/Helper/DataBaseHelper.php");

class CartoneroModel
{


    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }



    function agregarCartonero($nombre, $apellido, $direccion, $telefono, $franja_horaria, $dni, $vehiculo)
    {


        $sentencia = $this->db->prepare("INSERT INTO cartonero(apellido,direccion,DNI,franja_horaria_preferida,nombre,telefono,vehiculo) VALUES(?,?,?,?,?,?,?)");

        $sentencia->execute(array($nombre, $apellido, $direccion, $telefono, $franja_horaria, $dni, $vehiculo));
    }
}
