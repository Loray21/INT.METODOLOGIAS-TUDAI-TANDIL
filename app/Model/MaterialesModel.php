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

    function removeMaterial($materialId)
    {
        $this->db->prepare("DELETE FROM material WHERE id=?")->execute(array((int) $materialId[":ID"]));
    }

    function update($materialId, $name, $accepted)
    {
        $consulta = $this->db->prepare("UPDATE material SET material=?, aceptado=? WHERE id = ? ");
        $consulta->execute(array($name, $accepted, $materialId));
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }
    public function getMaterialesAceptados()
    {
        $consulta = $this->db->prepare("SELECT * FROM material WHERE aceptado = true");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public function getMaterialAceptados($materialId)
    {
        $consulta = $this->db->prepare("SELECT * FROM material WHERE aceptado = true AND id = ?");
        $consulta->execute(array($materialId));
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public function getMaterialRecolectadoPorCartonero($materialId, $cartoneroId)
    {
        $consulta = $this->db->prepare("SELECT * FROM material_recolectado WHERE  id_material=? AND id_cartonero=?");
        $consulta->execute(array($materialId, $cartoneroId));
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public function agregarMaterialRecolectado($peso,  $materialId, $cartoneroId)
    {
        $query = "";
        $existeMaterial = $this->getMaterialRecolectadoPorCartonero($materialId, $cartoneroId);
        if (!(isset($existeMaterial) && $existeMaterial)) {
            $query = "INSERT INTO material_recolectado(peso,id_material,id_cartonero) VALUES(?,?,?)";
        } else {
            $query = 'UPDATE material_recolectado SET peso=(peso+?) WHERE id_material=? AND id_cartonero=?';
        }
        $sentencia = $this->db->prepare($query);
        $sentencia->execute(array($peso, $materialId, $cartoneroId));
    }
}
