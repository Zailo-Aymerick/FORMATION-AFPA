<?php

include("class/Person.php");
include("class/Chat.php");

$myPerson = new Person("Toto","Dupont",new DateTime('1999-12-01'),"noBinary") ;
var_dump($myPerson);


$tata = new Person("Tata","Smith",new DateTime('1984-05-28') ,"Femme") ;
echo "<hr>" . $myPerson -> firstName ;

$myPerson->lastName = " Smith";
echo $myPerson -> lastName ;

echo "<br>" . $tata ->firstName . " " . $tata ->lastName;

echo"<br> <br>";



$myCat = new Chat("Minou","chartreuse","98") ;

$myCat -> eatFood(" Croquette <br>");

$myCat -> setColor(" Rouge ");
$myCat ->setName(" ");
echo "Le chat ". $myCat ->getName() . " est de couleur " . $myCat->getColor();


