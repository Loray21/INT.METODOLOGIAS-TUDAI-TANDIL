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

}
