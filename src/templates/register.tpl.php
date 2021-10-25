<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

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
            background: linear-gradient(to bottom, #FFCA96, white);
            color: navy;
            padding: 10px;
        }
        .link{
            display: flex;
            width: 10%;
            justify-content:space-around;
            background: linear-gradient(to bottom, #FFCA96, white);
        }

        .cuerpo{
            display: flex;
            width: 100%;
            height:300px;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
        }

        .formulario{
            display: flex;
            width: 40%;
            height: 400px;
            flex-direction: column;
            border: navy 5px double;
            align-items: center;
            justify-content: space-around;
            padding: 30px;
            
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
<header class="header">
    <div class="link">
            <a href="?url=home">Home</a>
            <a href="?url=login">Login</a>
        </div>
        <div class="titulo">
            <h1>SCHOOL</h1>
        </div>        
    </header>
    
    <!-- formulario donde se envian los datos para registrarse-->
    <div class="cuerpo">
        <form  class="formulario" action="?url=register_action" method="post">
        <h2>REGISTER</h2>
            <p>
            <label>Email: <input type="email" name="email" placeholder="Email" required></label>
            </p>
            <p>
            <label>Usuario: <input type="text" name="username" placeholder="Username" required></label>
            </p>  
            <p>
            <label>Password: <input type="password" name="passwd" placeholder="Password" required></label>
            </p>   
            <p>
            <label>Repeat password: <input type="password" name="passwd2" placeholder="Repeat password" required></label>
            </p>                
            <p>
            <button type="submit" name="boton">Register</button>
            </p>
                
        </form>
        </div>
</body>
</html>