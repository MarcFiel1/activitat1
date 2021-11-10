<?php
     session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritorio</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .header{
            display: flex;
            width: 100%;
        }

        .titulo{
            display: flex;
            width: 100%;
            height: 50px;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, aqua, white);
            color: navy;
            padding: 10px;
            margin-bottom: 10px;
        }
        .link{
            display: flex;
            width: 100%;
            height: 20px;
            padding: 10px 0px 10px 0px;
            justify-content:space-around;
            background: #A8FEF5;
            font-size: 20px;
            margin-bottom: 30px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        .cuerpo{
            display: flex;
            flex-direction: row;
            margin-top: 50px;
            justify-content: space-evenly;
            width: 100%;
            height: 200px;
        }

        .lista{
            display: flex;
            width: 180px;
            height: 50px;
            padding: 20px;
            justify-content: center;
            align-items: center;
            border: #2C005E 5px double; 
            background-color: #F8E1FF;
        }

        .lista:hover{
            cursor: pointer;
        }

        .tarea{
            display: flex;
            width: 180px;
            height: 50px;
            padding: 20px;
            justify-content: center;
            align-items: center;
            border: #2C005E 5px double; 
            background-color: #F8E1FF;
        }

        .cajitas{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .perfil{
            display: flex;
            flex-direction: column;
            width: 250px;
            padding: 10px;
            height: 50px;
            border-radius: 0px 20px 20px 0px;
            background-color: blanchedalmond;
            color: black;
            justify-content: flex-start;
        }

        .listas{
            display: flex;
            flex-direction: column;
            width: 250px;
            padding: 10px;
            height: auto;
            border-radius: 20px 0px 0px 20px;
            background-color: #FFD6B4;
            color: black;
            justify-content: flex-end;
            
        }

        .tarea:hover{
            cursor: pointer;
        }
        </style>

</head>
<body>
    <!--Aquí utilizo la variable de sesion para dar la bienvenida al usuario al registrarse-->

    <header class="header">
        <div class="titulo">
        <h1>ESCRITORIO</h1>
        </div>        
    </header>
    <div class="link">
    <a href="?url=home">Home</a>
            <a href="?url=lista">Listas</a>
            <a href="?url=tarea">Tareas</a>
        </div>
    <div class="cajitas">
        <div class="perfil">
        <p>Usuario: <?php echo $_SESSION["user"]; ?></p>
        <p>Email: <?php echo $_SESSION["email"]; ?></p>
        </div>
        <div class="listas">
            <?php
                session_start();    
                require APP.'/config.php';
                require APP.'/lib/conn.php';
                $db=getConnection($dsn,$dbuser,$dbpasswd);
                $sentencia = $db->prepare("SELECT * from tareas where username_id='".$_SESSION['usernameid']."';");
                $sentencia-> execute();
                //FETCH_ASSOC-> convertir en array asociativo
                $solicitud1 = $sentencia->fetchAll(PDO::FETCH_ASSOC);

                foreach($solicitud1 as $campos){
                    $tarea=$campos['tarea'];
                    $lista=$campos['lista'];
                    $descripcion=$campos['descripcion'];
                    if(empty($tarea)==false && empty($lista)==false && empty($descripcion)==false){
                            echo "Tarea:".$tarea."<br>
                            Lista: ".$lista."<br>
                            Descripcion: ".$descripcion."<br><br>";
                    }
                }
            ?>
        </div>
        
        </div>
    <div class="cuerpo">
    <a href="?url=lista">
    <div class="lista"> 
    
        <h3 style="color:black">Crear una lista</h3> 
    
    </div>
    </a>
    <a href="?url=tarea">
        <div class="tarea">
            <h3 style="color:black">Crear una tarea</h3>
    </div>
    </a>
    </div>
    

</body>
</html>