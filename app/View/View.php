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
}
