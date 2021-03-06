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
            background: linear-gradient(to bottom, #BEFF96, #E8F6F3 );
            color: navy;
            padding: 10px;
        }
        .link{
            display: flex;
            width: 100%;
            height: 20px;
            padding-bottom: 10px;
            justify-content:space-around;
            background: linear-gradient(to top, #BEFF96, #E8F6F3 );
            font-size: 20px;
            margin-bottom: 30px;
        }

        .cuerpo{
            display: flex;
            width: 100%;
            height:300px;
            align-items: center;
            justify-content: center;
        }

        h2{
            color: black;
            
        }

        .formulario{
            display: flex;
            width: 40%;
            height: 200px;
            flex-direction: column;
            border: navy 5px double;
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

        a{
            text-decoration: none;
            color: black;
        }


    </style>
</head>
<body>
    <header class="header">
        <div class="titulo">
            <h1>SCHOOL</h1>
        </div>
    </header>
    <div class="link">
            <a href="?url=home">Home</a>
            <a href="?url=register">Register</a>
        </div>
        <!-- formulario donde se envian los datos para logearse-->
    <div class="cuerpo">
            <form class="formulario" action="?url=login_action" method="post">
                <h2>LOGIN</h2>
                <label>Usuario: <input type="text" name="username" placeholder="Usuario"></label>
                <label>Password: <input type="password" name="passwd" placeholder="Password"></label>
                <button type="submit" name="boton_login">Login</button>
            </form>
    </div>
</body>
</html>