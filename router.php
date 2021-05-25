<?php 
    define("BASE_URL", '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

    require_once('app/Controller/Controller.php');

    require_once('RouterClass.php');

    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    }else {
        $action = "home";
    }

    $r = new Router(); 

    $r->addRoute("login", "POST", "Controller", "login");
    $r->addRoute("logout", "GET", "Controller", "logout");

    $r->addRoute("home", "GET", "Controller", "showHome");
  
    $r->setDefaultRoute("controller", "showHome");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 

