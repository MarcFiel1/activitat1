<?php
    
   require APP.'/config.php';
   require APP.'/lib/conn.php';

    /*Reciben los datos de los inputs que se encuentran en el fromulario de login.tpl.php con el INPUT POST y se guardan en variables.*/

   $username=filter_input(INPUT_POST,'username');
   $passwd=filter_input(INPUT_POST,'passwd');
   $boton_login=filter_input(INPUT_POST,'boton_login');

    /*Variable que conecta el nombre de usuario y el login con la base de datos*/
   $db=getConnection($dsn, $dbuser,$dbpasswd);

    /*Creo la variable sentencia para escoger y inidicar los campos de la base de datos con su $variable que 
    necesito para logearme*/
   $sentencia = $db->prepare("SELECT * FROM users WHERE username='".$username."' AND passwd='".$passwd."';");
   //se ejecuta
   $sentencia-> execute(); 
   //Con el fectAll convierto la sentencia en un array asociativo
   $solicitud = $sentencia->fetchAll(PDO::FETCH_ASSOC);

   
    /*Hago un if para que si hay un input vacio a la hora de logearse me diga usuario o contraseña incorrecta
    además de que si no coinciden esos valores con los del registro hecho anteriormente también ocurrira eso.
    Y sino ocurre eso, que me lleve al Escritorio.*/
   if(empty($solicitud)==true){
        echo "<a href='?url=login'>Vuelve al login</a><br>"; 
        echo "Usuario o contraseña incorrecto";
         
   } else {
        $_SESSION["user"] = $username;
        header("Location:?url=escritorio");
   }

