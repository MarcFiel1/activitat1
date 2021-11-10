<?php  
    //establecer errores
    //ini_set('display_errors','On');
    session_start();
    
    require 'vendor/autoload.php';

    //acces.env

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    require_once 'config.php';
    require_once 'src/router.php';

    //$_SESSION['nav']=['home'];
  

    $controller=getRoute();

    require APP.'/src/controllers/'.$controller.'.php';
        