<?php

function render(string $tpl,?array $data=[]):string{
    if($data){
        extract($data,EXTR_OVERWRITE);
    }
    //array data tabla símbolos
    ob_start();
    require 'src/templates/'.$tpl.'.tpl.php';
    $rendered= ob_get_clean();

    return (string)$rendered;
}
   