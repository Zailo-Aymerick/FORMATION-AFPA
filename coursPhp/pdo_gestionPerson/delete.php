<?php

// Inclusion des fichiers nécessaires contenant les définitions des classes et les configurations de la base de données
require_once('utils/DBconnect.php');
require_once('dao/IPersonDao.php');
require_once('dao/imp/PersonDaoImp.php');

$personDao = new PersonDaoImp();

if (isset($_GET['id'])) {
    //ON fait appel a la DAO 
    // AVEC LA METHODE DELETE
    $personDao->deletePerson($_GET['id']);
    // ON FAIT UNE REDIRECTION 
    // VERS LA PAGE SELECTIONPDO
    header('Location: selectionPDO.php');
}
