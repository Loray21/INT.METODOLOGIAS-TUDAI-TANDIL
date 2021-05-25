<?php

require_once("app/Helper/DataBaseHelper.php");

class MaterialesModel
{

    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }


    public function AgregarMaterial($material, $aceptado, $condicion)
    {
        $sentencia = $this->db->prepare("INSERT INTO material(material,aceptado,condicion) VALUES(?,?,?)");
        $sentencia->execute(array($material, $aceptado, $condicion));
    }
}
