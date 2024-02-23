<?php
require_once("class/Pokemon.php");
require_once("class/PokemonFeu.php");
require_once("class/PokemonEau.php");
require_once("class/PokemonPlante.php");
session_start();


$pokemonTab = $_SESSION["pokemonTab"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/selection.css">
</head>

<body>
    
    
<div class="pokemon">
    <?php 
          foreach ($pokemonTab as $pokemon) { 
    ?>

        <div class="pokemonColonne"><p> 
            <?php
             echo $pokemon->getName() 
             ?> 
         </p>
        <img src= 
                 <?php
                    echo '"' . $pokemon->getUrlImage() . '"'
                 ?> 
                alt=""></div>
    <?php
    }
    ?>
    </div>
    <form method="get" action="combat.php">
        <label for="choixPokemon">Choissisez les pokémons qui combattent : </label>
        <br>
        <select name="choixPokemon1" id="choixPokemon1">
            <?php foreach ($pokemonTab as $Pokemon) {?>
               
             
            <option value="<?php $pokemon->getName ?>"><?php $pokemon->getName ?></option>
           <?php } ?>
        </select>

        <select name="choixPokemon2" id="choixPokemon2">

        <?php foreach ($pokemonTab as $Pokemon) {?>
               
             
               <option value="<?php $pokemon->getName ?>"><?php $pokemon->getName ?></option>
              <?php } ?>
            
        </select>

        <input type="submit" value ="Combattre">
    </form>
</body>

</html>