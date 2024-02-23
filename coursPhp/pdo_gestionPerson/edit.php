<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- EN PHP ON Recupere la personne par son id -->
    <?php
    // Inclusion des fichiers nécessaires contenant les définitions des classes et les configurations de la base de données
    require_once('utils/DBconnect.php');
    require_once('dao/IPersonDao.php');
    require_once('dao/imp/PersonDaoImp.php');
    require_once('model/Person.php');

    $personDao = new PersonDaoImp();
    // Récupération de l'ID de la personne depuis l'URL
    $person_id = $_GET['id'];

    // Récupération des informations de la personne à partir de son ID
    $result = $personDao->getPersonById($person_id);

    // Création d'un objet Person avec les informations récupérées
    $person = new Person(
        $result['id'],
        $result['fullName'],
        $result['email'],
        $result['age']
    );
    ?>

    <!-- Formulaire de mise à jour des informations de la personne -->
    <form action="" method="post">
        <label for="fullName"> Nom complet : </label>
        <input type="text" name="fullName" value="<?= $person->getFullName() ?>"> <br>

        <label for="email"> email : </label>
        <input type="email" name="email" value="<?= $person->getEmail() ?>"> <br>

        <label for="age"> age : </label>
        <input type="number" name="age" value="<?= $person->getAge() ?>"> <br>

        <input type="submit" name="submit" value="Valider les modifications">
    </form>

    <!-- Le traitement du formulaire en php avec utilisation de la DAO -->
    <?php
    // Vérification si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupération des nouvelles valeurs depuis le formulaire
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // Appel de la méthode updatePerson de la DAO pour mettre à jour les informations de la personne dans la base de données
        $personDao->updatePerson($fullName, $email, $age, $person_id);

        // Redirection vers la page de sélection après la mise à jour
        header("Location: selectionPDO.php");
    }
    ?>
</body>

</html>