<?php 
include("../coursPhp/header.php");
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$datenaissance = ($_GET["datenaissance"]);
$numerosession = intval($_GET["sessionnumber"]);
$datearriver = ($_GET["datearriver"]);
$datedepart = ($_GET["datedepart"]);
$options = $_GET["options"];
strtotime($datearriver);
strtotime($datedepart);
strtotime($datenaissance);
$datearriver = (date_format(date_create($datearriver), 'd-m-Y'));
$datenaissance = (date_format(date_create($datenaissance), 'd-m-Y'));
$datedepart = (date_format(date_create($datedepart), 'd-m-Y'));
// $age = date_diff($datenaissance, date('d-m-Y'));
$initial = $prenom[0];
$initialnom = $nom[0];
$chiffrealeatoire = (random_int(0,9));
$chiffrealeatoire1 = (random_int(0,9));
$chiffrealeatoire2 = (random_int(0,9));
$chiffrealeatoire3 = (random_int(0,9));
strtoupper($initial);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif de commande</title>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
    
<?php
echo " Commande N° " . $initialnom. " " . $initial . " " . $chiffrealeatoire. " " . $chiffrealeatoire1. " " . $chiffrealeatoire2. " " . $chiffrealeatoire3;

echo "<p>Votre nom est : ". $nom ." , votre prénom : ". $prenom ." , vous êtes né le  : ". $datenaissance . " , vous avez" . "<br> Votre numéro de session est : " . $numerosession . "  vous arrivez le : ". $datearriver ." et repartez le : ". $datedepart . "<br> L'option choisit est : " . $options . "<p>";
?>





</body>
</html>