<?php
     session_start();    

   require APP.'/config.php';
   require APP.'/lib/conn.php';

    /*Reciben los datos de los inputs que se encuentran en el formulario de lista.tpl.php con el INPUT POST y se guardan en variables.*/

   $lista=filter_input(INPUT_POST,'lista');
   $boton_lista=filter_input(INPUT_POST,'boton_lista');
   

    /*Variable que conecta con la base de datos*/
   $db=getConnection($dsn, $dbuser,$dbpasswd);

    /*Creo la variable sentencia para escoger y inidicar los campos de la base de datos con su $variable que 
    necesito para crear una lista*/
   $sentencia = $db->prepare("INSERT INTO listas (lista,username_id) VALUES(?,?)");
   
    /*Quiero que me seleccione el id cuando el usuario sea el mismo que ha iniciado sesion */
   $sentencia1 = $db->prepare("SELECT id from users where username= '".$_SESSION["user"]."';");
   //se ejecuta
   $sentencia1-> execute(); 
   //Con el fectAll convierto la sentencia en un array asociativo
   $solicitud1 = $sentencia1->fetchAll(PDO::FETCH_ASSOC);

  //quiero coger la id del usuario que se ha especificado en la sentencia de arriba.
   foreach($solicitud1 as $id){
        $idusuario = $id['id'];
   }

    /*Hago un if para que si el input lo dejo vacio me diga Input vacio, añade un nombre a tu lista
    Y sino ocurre eso, que me lleve al Escritorio.*/
   if(empty($lista)==false){
     $sentencia->execute([$lista,$idusuario]);
     header("Location:?url=escritorio");
 
   } 
     
   
        


?>
