<?php

abstract class Employes
{
    private string $matricule;
    private string $nom;
    private string $prenom;
    private DateTime $birthDay;


    public function __construct(
        string $matricule,
        string $nom,
        string $prenom,
        string $birthDay
    ) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthDay = new DateTime($birthDay);
    }

    public function getMatricule()
    {
        return $this->matricule;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    public function __toString()
    {
        return
            get_class($this) . " : Le matricule est "
            . $this->matricule . " le nom est " . $this->nom .
            " le prenom est " . $this->prenom
            . " est né(e) le : "
            . $this->birthDay->format("Y-m-d")
            . " avec un salaire de : "  
            . $this->getSalaire() . "€ <br>";
    }

    abstract public function getSalaire(): float;
}
