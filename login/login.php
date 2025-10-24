<?php

    include 'data.php';
    
    // Inicializamos la variable para evitar warnings y asegurar que está vacía en carga inicial
    $error_msg = '';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        $usuario = $_POST['username'];
        $contrasenya = $_POST['password'];

        if($contrasenya === $password && $usuario === $user){

            header("Location: index.php"); //Redirige a mi pagina

        } else {

            // Guardamos el mensaje en una variable para mostrarlo después, dentro del formulario
            $error_msg = "❌Credenciales incorrectas. Prueba de nuevo.";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
            background-color: lightblue;
            margin: 0;
            padding: 0;
            font-family:'Garamond';
        }

        form{

            display: flex;
            flex-direction: column;
            width: 30%;
            align-items:center;
            margin: auto;
            gap: 20px;

        }

        #imagenHeader{
            
            background-color:blue;
            width:100%;
            height:100%;
            margin: auto;
        }

        #loginButton{
            width: 100px;
            height: 40px;
            border-radius: 10px;
            background-color: darkgreen;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
            font-family: 'Garamond';
            transition: 0.3s;
        }

        #loginButton:hover{
            transition: 0.3s;
            background-color: grey;
        }

        a{
        
        text-decoration: none; 
        background-color: red;
        font-size: 20px;
        color: white;
        border-radius: 10px;
        padding: 10px;
        display: inline-block;
        float: right;
        margin: 50px 20px 0 0;
        transition: 0.3s;
       } 

       a:hover{

        background-color: grey;
        transition: 0.3s;

       }


    </style>
</head>
<body>
    <?php

       include 'header.php'; 

    ?>
    <h1>Incia sesión en Pokémon</h1>
    <form action="login.php" method="post">

    <input type="text" id="username" name="username" placeholder="Usuario">
    <input type="password" id="password" name="password" placeholder="Contraseña">
    <input type="submit" value="Login" id="loginButton">

    <?php
        // Si existe el mensaje de error, lo mostramos debajo de los inputs
        if (isset($error_msg)) {
            echo '<div style="color: #900; margin-top: 8px; font-weight: bold;">' . $error_msg . '</div>';
        }
    ?>

    </form>
</body>
</html>