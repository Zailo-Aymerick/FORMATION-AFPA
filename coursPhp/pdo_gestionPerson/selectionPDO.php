<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> P.D.O Php Data Object</h1>
    <p> PDO est une extension php qui nous permet
        de se connecter et de manipuler une BDD
    </p>

    <?php
    // Inclusion des fichiers nécessaires contenant les définitions des classes et les configurations de la base de données
    require_once('utils/DBconnect.php'); // Inclusion du fichier contenant le singleton de connexion à la base de données
    require_once('dao/IPersonDao.php'); // Inclusion de l'interface DAO pour les personnes
    require_once('dao/imp/PersonDaoImp.php'); // Inclusion de l'implémentation de l'interface DAO pour les personnes
    require_once('model/Person.php'); // Inclusion de la classe Personne

    // Création d'une instance de la DAO des personnes
    $personDao = new PersonDaoImp();
    // Récupération de toutes les personnes depuis la base de données
    $persons = $personDao->getAllPersons();

    // Boucle sur le tableau $persons pour afficher chaque personne
    foreach ($persons as $person) {
        // Affichage des informations de la personne
        echo $person;
    ?>
        <!-- Liens pour supprimer et éditer la personne -->
        <a href="delete.php?id=<?= $person->getId() ?> ">
            <button>Supprimer</button>
        </a>
        <a href="edit.php?id=<?= $person->getId() ?>">
            <button>Editer</button>
        </a>

    <?php
    }
    ?>

</body>

</html>