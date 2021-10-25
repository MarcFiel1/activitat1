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
            width: 90%;
            height: 100px;
            align-items: center;
            justify-content: left;
            background: linear-gradient(to bottom, aqua, white);
            color: navy;
            padding: 10px;
        }
        .link{
            display: flex;
            width: 10%;
            justify-content:space-around;
            background: linear-gradient(to bottom, aqua, white);
        }
        </style>

</head>
<body>
    <!--Aquí utilizo la variable de sesion para dar la bienvenida al usuario al registrarse-->

    <header class="header">
    <div class="link">
            <a href="?url=home">Home</a>
            <a href="?url=login">Login</a>
            <a href="?url=register">Register</a>
        </div>
        <div class="titulo">
        <h1>Inicio de sesión correcto!</h1>
        </div>        
    </header>

    <h2>Hola, <?php echo $_SESSION["user"]; ?></h2>

    
<h3>
    
</h3>

</body>
</html>