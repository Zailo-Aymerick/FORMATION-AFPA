<?php
require_once ("class/Voiture.php");
require ("class/Avion.php");

$myVehicule = new Voiture("Fiat","Rose",52,350, 4, 4, 350 );

$avion = new Avion("Airbus","Blanc",250,4000, 8 );




$monGarage = [];
array_push($monGarage, $avion);             // 2 facons de rajouter un element a un tableau en php
$monGarage[] = $myVehicule;




foreach($monGarage as $vehicule) {
    echo $vehicule;
    echo $vehicule->avancer(45);
}

echo " " . $vehicule->reculer();

// impossible d'instancier une classe abstraite
// $vehicule = new Vehicule("La marque")


