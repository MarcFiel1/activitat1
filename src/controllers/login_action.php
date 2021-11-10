<?php
     session_start();    

   require APP.'/config.php';
   require APP.'/lib/conn.php';

    /*Reciben los datos de los inputs que se encuentran en el formulario de login.tpl.php con el INPUT POST y se guardan en variables.*/

   $username=filter_input(INPUT_POST,'username');
   $passwd=filter_input(INPUT_POST,'passwd');
   $boton_login=filter_input(INPUT_POST,'boton_login');
   

    /*Variable que conecta el nombre de usuario y el login con la base de datos*/
   $db=getConnection($dsn, $dbuser,$dbpasswd);

    /*Creo la variable sentencia para escoger y inidicar los campos de la base de datos con su $variable que 
    necesito para logearme*/
   $sentencia = $db->prepare("SELECT * FROM users WHERE username='".$username."';");

   //se ejecuta
   $sentencia-> execute(); 
   //Con el fectAll convierto la sentencia en un array asociativo
   $solicitud = $sentencia->fetchAll(PDO::FETCH_ASSOC);

   foreach ($solicitud as $campo){
        $email=$campo['email'];
        $_SESSION['usernameid']=$campo['id'];
   }
    /*Hago un if para que si hay un input vacio a la hora de logearse me diga usuario o contraseña incorrecta
    además de que si no coinciden esos valores con los del registro hecho anteriormente también ocurrira eso.
    Y sino ocurre eso, que me lleve al Escritorio.*/
   if(empty($solicitud)==true){

          echo "Usuario o contraseña incorrecto.<br>";
          echo "<a href='?url=login'>Vuelve al login</a>"; 
          
        
         
   } else{
        $passwdsolicitud=$solicitud[0];
        $passwdverify=password_verify($passwd,$passwdsolicitud['passwd']);

        if($passwdverify==true){
          $_SESSION["user"] = $username;
          $_SESSION["email"] = $email;
          header("Location:?url=escritorio");
        }else{
               echo "Has introducido mal la contraseña.<br>";
               echo "<a href='?url=login'>Vuelve al login</a>";
        }

        
        
   }

?>
