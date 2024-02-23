<?php

require_once("class/Employes.php");

class Patron extends Employes
{
    private static int $chiffreAffaire = 500000;
    private int $pourcentage;
    public function __construct(
        string $matricule,
        string $nom,
        string $prenom,
        string $birthDay,
        int $pourcentage
    ) {
        parent::__construct($matricule, $nom, $prenom, $birthDay);
        $this->pourcentage = $pourcentage;
    }

    public function getChiffreAffaire()
    {
        return self::$chiffreAffaire;
    }
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    public function setPourcentage(int $pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }
    public function __toString(): string
    {

        return parent::__toString() .
            " chiffre d'affaire : " .
            self::$chiffreAffaire .
            " Pourcentage : " .
            $this->pourcentage . "<hr>";
    }

    public function supprimerUnEmployer(Employes $employe) : string
    {
        if( !$employe instanceof Patron){
            return $employe->getNom() .  "est remercier par : " 
            .$this->nom;
        }
        return "impossible de virer un patron ! ";
    }

    public function getSalaire(): float
    {

        return round((self::$chiffreAffaire * $this->pourcentage / 100) / 12, 2  );
    }
}
