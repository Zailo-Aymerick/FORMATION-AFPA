<?php
include("POO/class/Animals.php");



$savannah = new Animals("Tagada",
                        "Gris",
                        "Savannah",
                        11, new DateTime('2006-07-21'),
                        "Chat Guépard il te chope et te lache plus") ;
$chatdgouttiere = new Animals("Felix",
                        "Gris et Noir",
                        "Chat de rue",
                        11, new DateTime('2012-09-30'),
                        "S'il te mord t'es malade") ;
 
                        
echo $savannah . "<hr><br> ";
echo $chatdgouttiere;
   