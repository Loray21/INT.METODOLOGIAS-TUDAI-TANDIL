<?php

require_once('libs/smarty/libs/Smarty.class.php');

class View
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function form()
    {
        $this->smarty->display('templates/form.tpl');
    }
    public function showError($msgError)
    {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }

    public function showexito($msgExit)
    {
        echo "<h1>EXITO!</h1>";
        echo "<h2>{$msgExit}</h2>";
    }
}
