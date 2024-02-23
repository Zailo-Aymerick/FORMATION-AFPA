<?php

require_once("class/Employes.php");

class Ouvrier extends Employes
{
    private DateTime $startDate;
    private static int $smig = 2500;

    public function __construct(
        string $matricule,
        string $nom,
        string $prenom,
        string $birthDay,
        DateTime $startDate
    ) {
        parent::__construct(
            $matricule,
            $nom,
            $prenom,
            $birthDay
        );
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function __toString(): string
    {

        return parent::__toString() .
            "embaucher le : " .
            $this->startDate->format("Y-m-d") . '<hr>';
    }

    public function getSalaire() : float {
        $currentDate = new DateTime();
        $anciennete  = date_diff($this->startDate,$currentDate);
        $salaire = self::$smig + $anciennete->y*100 ;
        if($salaire > self::$smig*2){
            return self::$smig*2;
        }
        return  $salaire;
    }


}
