<?php

require_once("app/Helper/DataBaseHelper.php");

class CartoneroModel
{
    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }

    function getCartoneros()
    {
        $consulta = $this->db->prepare(" SELECT * FROM cartonero ");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }



    function agregarCartonero($nombre, $apellido, $direccion, $telefono, $franja_horaria, $dni, $vehiculo)
    {


        $sentencia = $this->db->prepare("INSERT INTO cartonero(nombre, apellido, DNI, franja_horaria_preferida, direccion, telefono, vehiculo) VALUES(?,?,?,?,?,?,?)");

        $sentencia->execute(array($nombre, $apellido, $direccion, $telefono, $franja_horaria, $dni, $vehiculo));
    }

    function deleteCartonero($id){
        $consulta = $this->db->prepare("DELETE FROM cartonero WHERE id_cartonero = ?")->execute(array($id));
    }
}
