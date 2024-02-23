<?php

// Interface DAO (Data Access Object) pour la gestion des personnes dans la base de données
interface IPersonDao
{
    // Méthode pour récupérer toutes les personnes de la base de données
    function getAllPersons(): array;

    // Méthode pour enregistrer une nouvelle personne dans la base de données
    function savePerson(string $fullName, string $email, int $age);

    // Méthode pour mettre à jour les informations d'une personne dans la base de données
    function updatePerson(
        string $fullName,
        string $email,
        int $age,
        int $id
    );

    // Méthode pour supprimer une personne de la base de données
    function deletePerson(int $id): bool;

    // Méthode pour récupérer les informations d'une personne en fonction de son ID
    function getPersonById(int $id): array;
}
