<?php

// Implémentation de l'interface DAO pour la gestion des personnes dans la base de données
//Dans cette implémentation de l'interface DAO (IPersonDao), 
//chaque méthode est implémentée pour effectuer les opérations CRUD (Create, Read, Update, Delete)
//sur les entités "Personne" dans la base de données
class PersonDaoImp implements IPersonDao
{
    // Propriété pour stocker l'instance de connexion à la base de données
    private PDO $connexion;

    // Constructeur pour initialiser la connexion à la base de données
    public function __construct()
    {
        // Obtention de l'instance de connexion à la base de données via le singleton DBconnect
        $this->connexion = DBconnect::getInstance(
            "mysql:host=localhost;dbname=courspdo",
            "root",
            ""
        )->getConnexion();
    }

    // Méthode pour récupérer toutes les personnes depuis la base de données
    public function getAllPersons(): array
    {
        // Tableau pour stocker les personnes récupérées
        $persons = [];

        try {
            // Préparation de la requête SQL pour récupérer toutes les personnes
            $statement = $this->connexion->prepare("SELECT * FROM persons ;");
            // Exécution de la requête SQL
            $statement->execute();
            // Récupération des résultats sous forme de tableau associatif
            $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
            // Si des résultats sont trouvés
            if (count($resultat) > 0) {
                // Parcours des résultats pour créer des objets Person
                foreach ($resultat as $row) {
                    // Création d'un nouvel objet Person avec les données récupérées
                    $persons[] = new Person(
                        $row['id'],
                        $row['fullName'],
                        $row['email'],
                        $row['age']
                    );
                }
            }
        }
        // Gestion des exceptions PDO
        catch (PDOException $e) {
            // Affichage du message d'erreur en cas d'échec
            echo "Erreur : " . $e->getMessage();
        }

        // Retourne le tableau des personnes récupérées depuis la base de données
        return $persons;
    }

    // Méthode pour enregistrer une nouvelle personne dans la base de données
    public function savePerson(
        string $fullName,
        string $email,
        int $age
    ) {
        try {
            // Définition de la requête SQL pour insérer une nouvelle personne dans la table 'persons'
            $query = "INSERT INTO persons (fullName, email, age) VALUES (:fullName, :email, :age)";

            // Préparation de la requête SQL
            $stmt = $this->connexion->prepare($query);

            // Liaison des valeurs des champs du formulaire avec les paramètres de la requête SQL
            $stmt->bindValue(':fullName', $fullName);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':age', $age);

            // Exécution de la requête SQL préparée
            $stmt->execute();

            // Affichage d'un message de réussite si l'insertion s'est déroulée avec succès
            echo "Enregistrement réussi !";
        } catch (PDOException $e) {
            // Affichage d'un message d'erreur en cas d'échec de l'insertion
            echo "Un problème est survenu";
        }
    }

    // Méthode pour récupérer les informations d'une personne en fonction de son ID
    public function getPersonById(int $id): array
    {
        $result = []; // Initialisation de la variable résultat à un tableau vide

        try {
            // Préparation de la requête SQL pour récupérer une personne par son ID
            $query = "SELECT * FROM persons WHERE id = :id";

            // Préparation de la requête SQL
            $stmt = $this->connexion->prepare($query);

            // Liaison de la valeur de $id avec le paramètre :id de la requête SQL préparée
            $stmt->bindValue(':id', $id);

            // Exécution de la requête SQL préparée
            $stmt->execute();

            // Récupération du résultat de la requête sous forme de tableau associatif
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Gestion des exceptions PDO : affichage du message d'erreur
            echo $e->getMessage();
        }

        // Retourne le résultat (peut être un tableau associatif contenant les données de la personne ou null si aucune personne correspondante n'a été trouvée)
        return $result;
    }

    // Méthode pour supprimer une personne de la base de données
    public function deletePerson(int $id): bool
    {
        try {
            // Requête SQL pour supprimer une personne avec un ID donné
            $query = "DELETE FROM persons WHERE id = :id";

            // Préparation de la requête SQL
            $stmt = $this->connexion->prepare($query);

            // Liaison de la valeur de $id avec le paramètre :id de la requête SQL préparée
            $stmt->bindValue(":id", $id);

            // Exécution de la requête SQL préparée
            $stmt->execute();

            // Retourne vrai si la suppression est réussie
            return true;
        } catch (PDOException $e) {
            // Affichage du message d'erreur en cas d'échec de la suppression
            echo $e->getMessage();
        }

        // Retourne faux si la suppression échoue
        return false;
    }

    // Méthode pour mettre à jour les informations d'une personne
    public function updatePerson($fullName, $email, $age, $id)
    {
        try {
            // Requête SQL pour mettre à jour les informations d'une personne avec un ID donné
            $query  = "UPDATE persons SET fullName = :fullName , email = :email , age = :age WHERE id = :id ;";

            // Préparation de la requête SQL
            $stmt = $this->connexion->prepare($query);

            // Liaison des valeurs des paramètres de la requête SQL préparée
            $stmt->bindValue(":id", $id);
            $stmt->bindValue(':fullName', $fullName);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':age', $age);

            // Exécution de la requête SQL préparée
            $stmt->execute();
        } catch (PDOException $PDOException) {
            // Gestion des exceptions PDO : affichage du message d'erreur
            echo $PDOException->getMessage();
        }
    }
}
