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


        $sentencia = $this->db->prepare("INSERT INTO cartonero(nombre, apellido, id_cartonero, franja_horaria_preferida, direccion, telefono, vehiculo) VALUES(?,?,?,?,?,?,?)");

        $sentencia->execute(array($nombre, $apellido,$dni, $franja_horaria, $direccion, $telefono, $vehiculo));
    }

    function deleteCartonero($id){
        $this->db->prepare("DELETE FROM cartonero WHERE id_cartonero = ?")->execute(array($id));
    }

    function updateCartonero($name, $surname, $address , $phone, $vehicle, $hour, $document) {
        $query = $this->db->prepare(
            "UPDATE cartonero SET nombre=?, apellido=?, direccion=?, telefono=?, vehiculo=?, franja_horaria_preferida=? WHERE id_cartonero = ? "
        );
        $query->execute(array($name, $surname, $address , $phone, $vehicle, $hour, $document));
        return $query->fetchAll(PDO::FETCH_OBJ);

}
}
