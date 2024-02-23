<?php
// Inclusion du fichier contenant la classe DBconnect pour la connexion à la base de données
require_once('utils/DBconnect.php');

try {
    // Tentative d'obtention de l'instance de connexion à la base de données via le singleton DBconnect
    $connexion = DBconnect::getInstance(
        "mysql:host=localhost;dbname=courspdo",
        "root",
        ""
    );

    // Définition de la requête SQL pour insérer une nouvelle personne dans la table 'persons'
    $query = "INSERT INTO persons (fullName , age , email) VALUES ('TOTO',99 , 'toto2@gmail.com'); ";

    // Préparation de la requête SQL
    $stmt = $connexion->getConnexion()->prepare($query);

    // Exécution de la requête SQL préparée
    if ($stmt->execute()) {
        // Affichage d'un message si l'insertion s'est déroulée avec succès
        echo "toto est dans la bdd ! ";
    }
} catch (PDOException $e) {
    // Gestion des exceptions PDO : affichage du message d'erreur en cas d'échec
    echo $e->getMessage();
}
