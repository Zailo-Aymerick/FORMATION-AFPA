<?php 
include("../coursPhp/header.php");
$resultatVille =  $_GET["barrederecherche"];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire AFPA</title>
    <link rel="stylesheet" href="accueil.css">
 </head>
 <body>

<?php 
echo"<h1>Rèservation chambres AFPA " . $resultatVille . "</h1> <br>";
?>
    
 <form method="get" action="recap.php" id ="formulaire">

    <div class="inputformulaire">

        <div class ="divinput">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Derousseau">
        </div>

        <div class="divinput">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" placeholder="Toto">
        </div>
        
        <div class="divinput">
        <label for="datenaissance">Date de naissance</label>
        <input type="date" name="datenaissance">
        </div>
        
        <div class="divinput">
        <label for="sessionnumber">Session number</label>
        <input type="number" name="sessionnumber" placeholder ="12502">
        </div>
        
        <div class="divinput">
        <label for="datearriver">Date d'arrivée</label>
        <input type="date" name="datearriver">
        </div>
        
        <div class="divinput">
        <label for="datedepart">Date de départ</label>
        <input type="date" name="datedepart">
        </div>

    </div>
        <select  name="options" id="options">
            <option value="studio avec salle de bain">studio avec salle de bain</option>
            <option value="studio avec salle de bain et cuisine">studio avec salle de bain et cuisine</option>
            <option value="chambre de 9m² avec un bureau.">chambre de 9m² avec un bureau.</option>
        </select>

        <input type="submit" id="validationformulaire" value="Valider le formulaire">

 </form>
 </body>
 </html>
