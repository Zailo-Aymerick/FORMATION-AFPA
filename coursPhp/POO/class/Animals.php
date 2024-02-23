<?php

class Animals
{
    public string $name ; 

    public string $color ;
    public int $longevite ;
    public string $espece ;

    public DateTime $birthDay ;  

    public string $description ;

    public function __construct(string $name,
                                string $color,
                                string $espece,
                                int $longevite ,
                                DateTime $birthDay,
                                string $description) 
    {
        $this ->name = $name ;
        $this ->color = $color ;
        $this ->espece = $espece ;
        $this ->longevite = $longevite ;
        $this ->birthDay = $birthDay ;
        $this ->description = $description ;

    }

    public function __toString(){
        return "Votre chat est :  " . $this -> name ."<br> Il est " . $this -> color . "<br> de l'espèce " . $this -> espece . "<br> sa longévité est de " . $this -> longevite ." ans <br> il est né le " . $this ->  birthDay->format('d/m/Y') . "<br> et c'est : " . $this -> description ;
    }
}

