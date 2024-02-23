<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Personne</title>
</head>

<body>

    <!-- Formulaire pour saisir l'ID de la personne à rechercher -->
    <form action="" method="get">

        <label for="id_person">Id de la personne à rechercher :</label>
        <input type="number" name="id_person">
        <input type="submit" name="submit" value="Rechercher">

    </form>

    <?php
    // Inclusion des fichiers nécessaires
    require_once('model/Person.php');
    require_once('utils/DBconnect.php');
    require_once('dao/IPersonDao.php');
    require_once('dao/imp/PersonDaoImp.php');

    $personDao = new PersonDaoImp();

    // Vérification si le formulaire a été soumis avec la méthode GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        // Vérification si l'identifiant de la personne a été envoyé via GET
        if (isset($_GET['id_person'])) {

            // Récupération de l'ID de la personne depuis le formulaire
            $id = $_GET['id_person'];

            // Appel de la méthode statique getPersonById() de la classe PersonDAO pour récupérer les informations de la personne par son ID
            $result = $personDao->getPersonById($id);

            // Création d'un objet Person à partir des informations récupérées
            $person = new Person(
                $result['id'],
                $result['fullName'],
                $result['email'],
                $result['age']
            );

            // Vérification si la personne a été trouvée
            if ($result) {
                // Affichage des informations de la personne si elle a été trouvée
                echo "<h3>Informations Personne :</h3>";
                echo $person; // Appel implicite de la méthode __toString() de l'objet Person pour l'affichage
            } else {
                // Affichage d'un message si la personne n'a pas été trouvée
                echo "Personne non trouvée";
            }
        }
    }
    ?>

</body>

</html>
