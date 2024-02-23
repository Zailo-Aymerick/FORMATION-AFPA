<?php

class Person
{
    // Attributs (Les caractéristiques de l'objet personnes)
    public string $firstName ;  // Attribut $firstname de type string

    public string $lastName ;

    public DateTime $birthDay ;  // Attribut pour mettre en type date

    public string $gender ;

    public function __construct(string $firstName,
                                string $lastName,
                                DateTime $birthDay,
                                string $gender) 
    {
        $this ->firstName = $firstName ;
        $this ->lastName = $lastName ;
        $this ->birthDay = $birthDay ;
        $this ->gender = $gender ;

    }
}