<?php
// var_dump ($_POST);
// // $_POST nous permets d'acceder au information envoyer via la methode post
// // htmlspecialchars nous permets de transformer tout les balises en string pour éviter d'avoir des injections html ou JS
// echo"<br> Bonjour " .htmlspecialchars ($_POST["firstName"]);


$name = $_GET["firstName"];
if (!empty($_GET['firstName'])){

    echo"<h1> $name  </h1>";
} 

if (isset($_GET["firstName"])){
    echo "FirstName n'est pas défini";
}