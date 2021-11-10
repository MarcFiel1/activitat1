<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>escritorio</title>

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
        .perfil{
            display: flex;
            flex-direction: column;
            width: 250px;
            padding: 10px;
            height: 50px;
            border-radius: 0px 20px 20px 0px;
            background-color: blanchedalmond;
            color: black;
        }

        a{
            text-decoration: none;
            color: black;
        }
        .cuerpo{
            display: flex;
            width: 100%;
            height:300px;
            align-items: center;
            justify-content: center;
        }
        .formulario{
            display: flex;
            width: 40%;
            height: 200px;
            flex-direction: column;
            border: #2C005E  5px double;
            align-items: center;
            justify-content: space-around;
            padding: 30px;
            background-color: #F4F6F6 
        }

        button{
            display: flex;
            width: 300px;
            height: 30px;
            padding: 20px;
            justify-content: center;
            align-items: center;
            background-color: #D1F2EB;
            cursor: pointer;
        }
    
        </style>

</head>
<body>
    <!--Aquí utilizo la variable de sesion para dar la bienvenida al usuario al registrarse-->

    <header class="header">
        <div class="titulo">
        <h1>TAREAS</h1>
        </div>        
    </header>
    <div class="link">
            <a href="?url=home">Home</a>
            <a href="?url=escritorio">Escritorio</a>
            <a href="?url=lista">Listas</a>
        </div>
        <div class="perfil">
        <p>Usuario: <?php echo $_SESSION["user"]; ?></p>
        <p>Email: <?php echo $_SESSION["email"]; ?></p>
        </div>
    <div class="cuerpo">
            <form class="formulario" action="?url=tarea_action" method="post">
                <h2>NUEVA TAREA</h2>
                <br>
                <label>Nombre Lista: <input type="text" name="lista" required></label>
                <label>Nombre Tarea: <input type="text" name="tarea" required></label>
                <label>Descripción: <input type="text" name="descripcion" required></label><br>
                <button type="submit" name="boton_tarea">Crear Tarea</button>
            </form>
    </div>
    </div>
    

</body>
</html>