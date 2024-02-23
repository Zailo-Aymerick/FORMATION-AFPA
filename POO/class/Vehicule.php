<?php

abstract class Vehicule{

    //Variables de classe elle ne fait pas partie des attributs des objets Vehicule 
    private static int $compteurVehicule = 0;

    private int $id;
    private string $marque;
    protected string  $couleur;
    private int $nbPassager;
    private int $vitesse;


    public function __construct(string $marque,
                                string $couleur,
                                int $nbPassager,
                                int $vitesse)
 {
    $this->marque = $marque;
    $this->couleur = $couleur;
    $this->nbPassager = $nbPassager;
    $this->vitesse = $vitesse;
    // Le mot clé self donne la classe actuelle
    $this->id = ++self::$compteurVehicule;
 }

// accesseur (getter)
public function getMarque() {
    return $this->marque;
}
//  Mutateur (setter)
public function setMarque( $uneMarque ){
    $this->marque = $uneMarque;
}


public function getCouleur()
{
    return $this->couleur;
}


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

public function __toString() : string { 
    return $this->id . " " . get_class($this) . "Vehicule de marque : " . $this->marque .
    " de couleur " . $this->couleur .
    " avec un nombre de passager : ". $this->nbPassager .
    " allant à une vitesse de : ". $this->vitesse . "km/h <br>";
}

 
 public function avancer(int $distance):string {
    return get_class($this) . " Le véhicule avance de " . $distance;
 }


}
