<?php

require_once("app/Helper/DataBaseHelper.php");

class materialPorCartoneroModel
{
    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    } 

    function getMaterialesPorCartonero () { 
        $consulta = $this->db->prepare(" SELECT m.material,mr.peso, c.id_cartonero,c.nombre
                                             FROM material_recolectado mr JOIN material m ON ( mr.id_material = m.id ) 
                                                JOIN cartonero c ON ( c.id_cartonero = mr.id_cartonero )");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    } 
}
