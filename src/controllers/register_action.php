<?php

    //require APP.'/src/database.php';

    require APP.'/config.php';
    require APP.'/lib/conn.php';
    
     /*Reciben los datos de los inputs que se encuentran en el fromulario de login.tpl.php con el INPUT POST y se guardan en variables.*/
    $email=filter_input(INPUT_POST,'email');
    $username=filter_input(INPUT_POST,'username');
    $passwd=filter_input(INPUT_POST,'passwd');
    $passwd2=filter_input(INPUT_POST,'passwd2');
    $boton_registar=filter_input(INPUT_POST,'boton');

    /*Variable que conecta el nombre de usuario y el login con la base de datos*/
    $db=getConnection($dsn, $dbuser,$dbpasswd);

    /*Creo la variable sentencia para escoger y inidicar los campos de la base de datos con su $variable que 
    necesito para logearme*/
    $sentencia = $db->prepare("INSERT INTO users (username,email,passwd) VALUES(?,?,?);");


    /* Creo un if para que la passwd y la confirm passwd sean iguales y si en este caso lo son, que ejecute 
    la sentencia y me lleve al Home. Y si no que me diga que las passwords son diferentes*/
    if($passwd==$passwd2){
        $sentencia->execute([$username,$email,$passwd]);
        header("Location:?url=home");
    } else  {
        echo "<a href='?url=register'>Vuelve al Register</a><br>";
        echo "Las password son distintas.";
        
    }

   