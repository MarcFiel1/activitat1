<?php

    define('APP',__DIR__);
    //DATOS ACCESOS A BBDD
    $dbhost=$_ENV['DB_HOST'];
    $dbuser=$_ENV['DB_USER'];
    $dbname=$_ENV['DB_NAME'];
    $dbpasswd=$_ENV['DB_PASSWORD'];
    $dsn='mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8mb4';
?>