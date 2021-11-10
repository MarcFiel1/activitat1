<?php
if(isset($_REQUEST['politica-cookies'])){
    $caducicad = time() + (60*60*24*30);
    setcookie('politica', '1', $caducicad);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .titulo{
            display: flex;
            width: 100%;
            height: 100px;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, #BEFF96, white);
            color: navy;
        }

        .introduccion{
            display: flex;
            width: 100%;
            height: 50px;
            align-items: center;
            justify-content: center;
            color: black;
        }

        .general{
            display: flex;
            flex-direction: row;
            margin-top: 50px;
            justify-content: space-around;
            width: 100%;
            height: 200px;
        }

        .login{
            display: flex;
            width: 200px;
            height: 70px;
            padding: 20px;
            justify-content: center;
            align-items: center;
            border: navy 5px double; 
            background-color: #D1F2EB;
        }

        .login:hover{
            cursor: pointer;
        }

        .register{
            display: flex;
            width: 200px;
            height: 70px;
            padding: 20px;
            justify-content: center;
            align-items: center;
            border: navy 5px double; 
            background-color: #D1F2EB;
        }

        .register:hover{
            cursor: pointer;
        }

        .cookies{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: auto;
            justify-content: center;
            text-align: center;
            align-items: center;
        
            background-color: #f5f5f5;
            font-size:20px;

        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header class="titulo"> 
        <h1>SCHOOL</h1>
    </header>
    
<div class="introduccion">
    Bienvenido a mi página. Espero que disfrutes navegando en ella!
</div>

<div class="general">
<a href="?url=login">
    <div class="login"> 
    
        <h3 style="color:navy">Login</h3> 
    
    </div>
</a>
<a href="?url=register">
    <div class="register">
            <h3 style="color:navy">Register</h3>
    </div>
</a>
</div>
<div class="cookies">
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset ($_COOKIE['politica'])): ?>
            <div>
                <h3>AVISO DE COOKIES</h3>
                <p>Utilizamos cookies propias y de terceros para mejorar nuestro servicio. Si continúa con la navegación, consideramos que acepta este uso.</p><br>
                <button style="padding: 15px;"><a href="?politica-cookies=1">Aceptar</a></button>
            </div>
            <?php endif; ?>
    </div>
</body>
</html>