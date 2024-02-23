<?php

class Person
{
    // Attributs ( les caracrtèristique des objets personnes)
    public string $firstName; // Attribut firstName de type String
    private string $lastName;
    public DateTime $birthDay;
    public  string $gender;

    public function __construct(
        string $firstName,
        string $lastName,
         DateTime $birthDay,
         string $gender)
    {

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->gender = $gender;
    }

    //accecesseur Getter
    public function getLastName() : string {
        return $this->lastName;
    }

    //Mutateur Setter 
    public function setLastName( $newLastName ){
        if( strlen($newLastName) > 0){
            $this->lastName = $newLastName;
        }
    }

}
