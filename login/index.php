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

        #imagenHeader{
            
            background-color:blue;
            width:100%;
            height:100%;

        }

        form{

            display: flex;
            flex-direction: column;
            width: 30%;
            align-items:center;
            margin: auto;
            gap: 20px;

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

    </style>
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
        
    </header>
    <main>
        <form action="personajes.php" method="post">
            <h2>Añade tu Pokémon</h2>
            <input type="text" name="nombre" placeholder="Nombre del Pokémon" required>
            <input type="text" name="tipo" placeholder="Tipo del Pokémon (planta, fuego, eléctrico...)" required>
            <input type="submit" id="loginButton" value="Añadir">
        </form>
    </main>

</body>
</html>