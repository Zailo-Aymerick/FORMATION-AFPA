<?php

//Création d'un class véhicule, on déclare une class toujours à l'aide du mot clé class
//Suivie du nom de la class en PascalCase 
class Vehicule
{

    // l'opérateur private permet que l'attribut soit accessible que depuis la classe
    private string $marque;
    private string $couleur;
    private int $nbPassager;
    private int $vitesse;

    // Création du constructeur Vehicule avec tout les attributs en paramètres
    public function __construct(
        string $uneMarque,
        string $couleur,
        int $nbPassager,
        int $vitesse,
    ) {
        $this->marque = $uneMarque;
        $this->couleur = $couleur;
        $this->nbPassager = $nbPassager;
        $this->vitesse = $vitesse;
    }

    // accesseur (getter)
    public function getMarque()
    {
        return $this->marque;
    }
    //  Mutateur (setter)
    public function setMarque($uneMarque)
    {
        $this->marque = $uneMarque;
    }



    // création d'un accesseur à l'attribut Couleur 
    public function getCouleur()
    {
        return $this->couleur;
    }

    // création d'un mutateur  à l'attribut Couleur
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }


    public function getNbPassager(): int
    {
        return $this->nbPassager;
    }


    public function setNbPassager(int $nbPassager)
    {
        $this->nbPassager = $nbPassager;

        return $this;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }


    public function setVitesse(int $vitesse)
    {
        $this->vitesse = $vitesse;
    }

    public function __toString(): string
    {

        return get_class($this) . " de marque : "
            . $this->marque .
            " de couleur  " . $this->couleur .
            " avec un nombre de passager " . $this->nbPassager .
            " allant a une vitesse de " . $this->vitesse . " km";
    }

    public function avancer(int $distance) : string
    {
        return  get_class($this) . " avance de " . $distance . "km";
    }
}
