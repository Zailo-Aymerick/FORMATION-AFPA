<?php
    echo "<p>Ce fichier contient le cours de base du php</>"; // echo "" permet d'écrire dans la page
    echo " du 25 janvier 2024";

    $maVariable = "toto"; // <-- chaine de caractère
    $nombre1 = 5;            // <-- entier
    $monBooleen = false;     // <-- Booleen
    $decimal = 1.25;
    $salutation = " salut et $maVariable";


    echo "<br>";

    // var_dump permet d'afficher le contenu et le type d'une variable
    var_dump($salutation);

    echo " <br> le type de la variable decimal est " . getType($decimal); 

    echo "<hr> création de constante avec define :";
    define('TIME_FOR_PAUSE', 14 );
    echo TIME_FOR_PAUSE . " heures";
    
    echo "<hr> affichage de la constante magique __FILE__ :  <br>";
    echo __FILE__ . "<br>"; 



    $nombre1 += 5;  //$nombre1 = $nombre1+5
    $nombre1 -= 5;  //$nombre1 = $nombre1-5
    $nombre1 /= 5;  //$nombre1 = $nombre1/5
    $nombre1 .= "55";  //$nombre1 = $nombre1 . "55"  // le . permets la concaténation.
    echo $nombre1;
    // echo $nombre1++;

    // declaration de tableau en php version < 5.4
    $monTableau = array("pomme", "fraise", "banane");
    // declaration moderne d'un tableau en php
    $legumes = ["salade", "tomate", "oignion"];

echo "<hr> les tableaux : ";

?>

<p>accéder au valeurs d'un tableau avec tableau[index]</p>
<?php 
    echo $monTableau[0];
    echo " <hr> " . $legumes[1];
    $legumes[] = " patate ";            //permets de rajouter une donnée a la fin d'un tableau
    echo $legumes[3];
?>
<p>Les tableaux assiociatif en php</p>

<?php 
    $personne = ["nom" => "John",
                "age" => 30,
                "ville" => "Roubaix"
                ];
        //Ajouter un élément dans un tableau par clé assiociatif
        $personne["hobbies"] = " Développement en php ";
    echo $personne["nom"];
    echo $personne["hobbies"];
    //Unset permets de détruire une variable ou une case donnée 
    unset($personne["hobbies"]);
var_dump($personne);

?>

<p>Les tableaux multidimensionnel </p>

<?php 
$gameOfThroneFamilies = [

    "lannister" => [
        "pere" => " tywin ",
        "soeur" => " cersei ",
        "frere" => " jaimes "
    ],

    "stark" => [
        "pere" => " robb ",
        "mere" => " catelyn ",
        "fils" => " john "
    ],
];
echo $gameOfThroneFamilies['lannister']["pere"]; // Afficheras Tywin



// boucle if else en php
$note = 2;
if ($note > 10) {
    echo " bravo vous avez la moyenne";
} else {
    echo " vous n'avez pas la moyenne... faut bosser !!";
}

// operation ternaire  = Condition ? valeur_si_vrai : valeur_si_faux
$affichage =($note > 10) ? " Vous avez la moyenne " : " faut réviser ! ";

// date("H") va retourner l'heure actuelle
$heure = date("H");
if ($heure < 12) {
    echo " Delphine regarde si c'est la pause ! ";
} elseif ($heure < 14){
    echo " Delphine regarde si c'est la pause de l'aprés-midi ! ";
} else {
    echo "<br>" . " Delphine est avec le chat ! ";
}

?>

<p> Les boucles : </p>

<?php 
$compteur = 0;
while ($compteur < 5) {
    echo "Tour $compteur de la boucles while <br>";
    $compteur++;
}

for ($i=0; $i < 5 ; $i++){ 
    echo " iteration $i de la boucle for <br> ";
}

// syntaxe boucle do while
$nombre1 = 1;
do {
    echo "$nombre1 <br>";
    $nombre1--;
} while ($nombre1>0);

foreach ($personne as $key => $value) {
     echo "$key : $value <br>";
}


function nomDeMaFonction($parametre1){
    echo "le parametre est : $parametre1";
}



nomDeMaFonction("Bonjour depuis une fonction");

function multiplier ($n1 , $n2){
    $resultat = $n1 * $n2;
    return $n1 * $n2;
}


$produit = multiplier(6,2);
echo  "le resultat de la multiplication est : $produit";





