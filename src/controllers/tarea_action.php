<?php
     session_start();    

   require APP.'/config.php';
   require APP.'/lib/conn.php';

    /*Reciben los datos de los inputs que se encuentran en el formulario de tarea.tpl.php con el INPUT POST y se guardan en variables.*/

   $tarea=filter_input(INPUT_POST,'tarea');
   $lista=filter_input(INPUT_POST,'lista');
   $descripcion=filter_input(INPUT_POST,'descripcion');
   $boton_tarea=filter_input(INPUT_POST,'boton_tarea');
   

    /*Variable que conecta la base de datos*/
   $db=getConnection($dsn, $dbuser,$dbpasswd);
    /*Creo la variable sentencia para escoger y inidicar los campos de la base de datos con su $variable que 
    necesito para crear una tarea*/
   $sentencia = $db->prepare("INSERT INTO tareas (username_id, lista, tarea, descripcion) VALUES(?,?,?,?)");

   /*Quiero que me seleccione el id cuando el usuario sea el mismo que ha iniciado sesion */
   $sentencia1 = $db->prepare("SELECT id from users where username= '".$_SESSION["user"]."';");
   //se ejecuta
   $sentencia1-> execute(); 
   //Con el fectAll convierto la sentencia en un array asociativo
   $solicitud1 = $sentencia1->fetchAll(PDO::FETCH_ASSOC);


  //quiero coger la id del usuario que se ha especificado en la sentencia de arriba.
   foreach($solicitud1 as $campos){
        $usernameid = $campos['id'];
   }   
    /*Hago un if para añadir un nombre a una tarea
    Y que me lleve al Escritorio.*/
   if(empty($tarea)==false){
     $sentencia->execute([$usernameid,$lista,$tarea,$descripcion]);
     header("Location:?url=escritorio");
 
   } 

?>
