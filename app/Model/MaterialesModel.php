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
        $consulta = $this->db->prepare(" SELECT * from material ");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public function AgregarMaterial($material, $aceptado, $condicion)
    {
        $sentencia = $this->db->prepare("INSERT INTO material(material,aceptado,condicion) VALUES(?,?,?)");
        $sentencia->execute(array($material, $aceptado, $condicion));
    }
}
