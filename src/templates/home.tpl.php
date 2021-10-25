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
<main class="col-span-10">
</main>
</body>
</html>