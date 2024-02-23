<?php

include("class/Person.php");
include("class/Animals.php");
include("class/Chat.php");

$myPerson = new Person("Toto", "Dupont", new DateTime('1999-12-01'), "noBinary");
var_dump($myPerson);
$tata =  new Person("Tata", "Smith", new DateTime("1984-05-28"), "Femme");
echo "<hr>" . $myPerson->firstName;

$myPerson->setLastName("Simth");
echo " " . $myPerson->getLastName();

echo "<br>" .  $tata->firstName .
    " " . $tata->getLastName();

$animal = new Animals(
    "LeChat",
    "Noir et blanc",
    10,
    "Chat",
    "un petit Chat ",
    new DateTime()
);


$myDog = new Animals(
    "le chien",
    "Noir et blanc",
    10,
    "Chien",
    "un Chien",
    new DateTime()
);
echo  $animal;
echo $myDog->__toString();
echo "<br>";
$myCat = new Chat("Minou", "chatreuse", 98);

$myCat->eatFood("croquette");
echo "<br>";
echo "le chat " .
    $myCat->getName() .
    " est de couleur " .
    $myCat->getColor() . '<br>';

$myCat->setColor("Rouge");
$myCat->setName('123');

echo "le chat " .
    $myCat->getName() .
    " est de couleur " .
    $myCat->getColor();
