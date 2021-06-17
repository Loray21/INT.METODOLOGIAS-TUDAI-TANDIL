<?php

require_once("app/Helper/DataBaseHelper.php");

class MaterialesModel
{
    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }

    function getMateriales()
    {
        $consulta = $this->db->prepare(" SELECT * FROM material ");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    function agregarMaterial($material, $aceptado, $condicion)
    {
        $sentencia = $this->db->prepare("INSERT INTO material(material,aceptado,condicion) VALUES(?,?,?)");
        $sentencia->execute(array($material, $aceptado, $condicion));
    }
    
    function removeMaterial($materialId) {
        $this->db->prepare("DELETE FROM material WHERE id=?")->execute(array((int) $materialId[":ID"]));
    }

    function update($materialId, $name, $accepted) {
        $consulta = $this->db->prepare("UPDATE material SET material=?, aceptado=? WHERE id = ? ");
        $consulta->execute(array($name, $accepted, $materialId));
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }
}
