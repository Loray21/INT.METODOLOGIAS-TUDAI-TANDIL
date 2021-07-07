<?php

require_once('libs/smarty/libs/Smarty.class.php');

class View
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function renderHome($isUserLoggedIn, $materiales, $materialesAceptados, $cartoneros, $pedidos = null, $matPorCartoneros = null)
    {
        $this->smarty->assign("BASE_URL", BASE_URL);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('materialesAceptados', $materialesAceptados);
        $this->smarty->assign('pedidos', $pedidos);
        $this->smarty->assign('cartoneros', $cartoneros);
        $this->smarty->assign("isUserLoggedIn", $isUserLoggedIn);
        $this->smarty->assign("showUpdateMaterial", $isUserLoggedIn);
        $this->smarty->assign("matPorCartoneros", $matPorCartoneros);
        $this->smarty->display("templates/page.tpl");
    }

}
