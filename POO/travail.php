<?php
include_once("class/Ouvrier.php");
include_once("class/Cadre.php");
include_once("class/Patron.php");


$monEmployer = new Ouvrier(
    "G5466",
    "Dupont",
    "Toto",
    "1999-01-29",
    new DateTime("2015-07-12")
);

$cadre = new Cadre("C0001", "TATA", "John","1970-05-01",5);
$patron = new Patron("P0001", "Smith", "Will","1901-05-01",80);
$patron2 = new Patron("P0002", "DUPONT", "TOTO","1901-05-01",100);
$entreprise  = [$monEmployer,$cadre,$patron,$patron2];

foreach($entreprise as $employe){
  
    if($employe instanceof Patron){
       echo  $employe->supprimerUnEmployer($cadre) . " ";
       echo  $employe->supprimerUnEmployer($patron2). " ";
    }
    echo $employe;

}


