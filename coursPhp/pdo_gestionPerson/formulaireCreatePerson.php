<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <!-- Formulaire pour saisir les informations d'une nouvelle personne -->
        <label for="fullName">Nom complet</label>
        <input type="text" name="fullName"> <br>
        <label for="email">Email :</label>
        <input type="text" name="email"> <br>
        <label for="age">Age :</label>
        <input type="number" name="age"> <br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
 // Inclusion des fichiers nécessaires contenant les définitions des classes et les configurations de la base de données
 require_once('utils/DBconnect.php');
 require_once('dao/IPersonDao.php');
 require_once('dao/imp/PersonDaoImp.php');

 $personDao = new PersonDaoImp();
    // Vérification si le formulaire a été soumis (méthode POST)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Vérification si les champs requis sont présents dans la requête
        if (
            isset($_POST['fullName'])
            && isset($_POST['age'])
            && isset($_POST['email'])
        ) {
            
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            $personDao->savePerson($fullName, $email, $age);
        }
    }
    ?>
</body>

</html>