<?php

require_once("class/Employes.php");

class Cadre extends Employes
{
    private int $indice;
    private static $referenceSalaire = [13000, 15000, 17000, 20000];

    public function __construct(
        string $matricule,
        string $nom,
        string $prenom,
        string $birthDay,
        int $indice
    ) {
        parent::__construct($matricule, $nom, $prenom, $birthDay);
        $this->setIndice($indice);
    }

    public function getIndice()
    {
        return $this->indice;
    }

    public function setIndice(int $indice)
    {
        if ($indice < 1) {
            $this->indice = 1;
        } elseif ($indice > 4) {
            $this->indice = 4;
        } else {
            $this->indice = $indice;
        }
    }


    public function __toString(): string
    {

        return parent::__toString() .
            "indice : " . $this->indice . "<hr>";
    }
    public function getSalaire(): float
    {
        return self::$referenceSalaire[$this->indice - 1];
    }
}
