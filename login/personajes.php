<?php 

session_start();

    $pokemons = [];
    $_SESSION['pokemons'] = $pokemons;

 if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    array_push($pokemons, ['nombre' => $nombre, 'tipo' => $tipo]);
    
 };

    echo "<h2>Pokémons añadidos:</h2>";
    foreach($pokemons as $pokemon){
        echo "<p>Nombre: " . $pokemon['nombre'] . " - Tipo: " . $pokemon['tipo'] . "</p>";
    }

?>

