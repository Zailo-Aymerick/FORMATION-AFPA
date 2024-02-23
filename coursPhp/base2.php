<?php
include("base.php"); // mettre un autre code php dans son code
echo "<h2> Les fonctions sur es string : </h2>";
$string = " Bonjour toUt Le MONdE   ";
echo "  la taille du string est de : " . strlen($string);
echo "<br>";

echo "<p>"  .  trim($string) . "</p>";
$string2 = trim($string);
echo "  la taille de la chaine string2 est de : " . strlen($string2);
echo "<br>";



echo strtolower($string);
echo "<br> <hr>";
echo strtoupper($string);
echo "<br> <hr>";
echo ucwords($string);
echo " <hr>  <br> ";


echo "<h2> Les fonctions sur les tableaux : </h2>";
$tab = [1,2,3,44,55,99,45,7,98,7,2];
echo " La taille du tableau est de :   " . count($tab) ."<br>";

unset($tab[3]); // Supprimer élément d'un tableau par son index
var_dump($tab);
echo "<hr>";
$tabSansDoublon = array_unique($tab);
echo "<hr>" . var_dump($tabSansDoublon);


for ($i = 0; $i < count($tabSansDoublon); $i++){
    if (array_key_exists($i , $tabSansDoublon)){
    echo "<p>". $tabSansDoublon[$i] ."<p>";
 }
//methode pour voir un tableau si un index a ete unset
}


echo"<hr>";
echo sort($tab);
echo  "Tableau trié avec la fonction sort : ( ordre croissant) <hr>";



foreach ($tab as $value) { 
    echo "<p>". $value ."</p>";
}


echo"<hr>";
rsort($tab);
echo " Tableau trié avec la fonction rsort (ordre décroissant) <hr>";
foreach ($tab as $value) {
    echo "<p>". $value ."</p>";
}

 