<?php
session_start();

require_once("class/Pokemon.php");
require_once("class/PokemonFeu.php");
require_once("class/PokemonEau.php");
require_once("class/PokemonPlante.php");

if (isset($_SESSION["pokemonTab"])) {
    $pokemonTab = $_SESSION["pokemonTab"];
} else {
    $pokemonTab = [];
    $_SESSION["pokemonTab"] = $pokemonTab;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création Pokemon</title>
    <link rel="stylesheet" href="assets/css/pokemon.css">
</head>

<body>

    <a href="selection.php">go to the selection</a>

    <form action="" metode="get">
        <label for="pokeName"> Nom :</label>
        <input type="text" name="pokeName">
        <label for="hp"> Hp :</label>
        <input type="number" name="hp">
        <label for="atk"> Atk : </label>
        <input type="number" name="atk">
        <label for="urlImage"> image : </label>
        <input type="text" name="urlImage">
        <label for="type"> Type de pokemon :</label>
        <select name="type" id="type">
            <option value="normal">Normal</option>
            <option value="feu">Feu</option>
            <option value="eau">Eau</option>
            <option value="plante">Plante</option>
        </select>

        <input type="submit" value="Crée mon pokemon">
    </form>

</body>

</html>
<?php

if (
    isset($_GET["pokeName"])
    && isset($_GET["hp"])
    && isset($_GET["atk"])
    && isset($_GET["type"])
    && isset($_GET["urlImage"])
) {
    $name = $_GET["pokeName"];
    $hp = $_GET["hp"];
    $atk = $_GET["atk"];
    $urlImage = $_GET["urlImage"];
    $type = $_GET["type"];
    $pokemon;
    switch ($type) {
        case "feu":
            $pokemon = new PokemonFeu($name, $hp, $atk, $urlImage);
            break;
        case "eau":
            $pokemon = new PokemonEau($name, $hp, $atk, $urlImage);
            break;
        case "plante":
            $pokemon = new PokemonPlante($name, $hp, $atk, $urlImage);
            break;
        default:
            $pokemon = new Pokemon($name, $hp, $atk, $urlImage);
    }
}

if (isset($pokemon)) {

    //array_push($pokemonTab,$pokemon)
    $pokemonTab[] = $pokemon;
    $_SESSION["pokemonTab"] = $pokemonTab;

?>
    <p>
        <?php echo $pokemon->getName() ?>
    </p>
    <img src=<?php
                echo '"' . $pokemon->getUrlImage() . '"'
                ?> alt="">
<?php
}
