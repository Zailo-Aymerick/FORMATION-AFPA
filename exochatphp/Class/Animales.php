<?php

class Animales
{
    private string $name ; 
    private string $espece ;
    private int $longevite ;

    private string $alimentation ;

    private string $urlimage;  


    public function __construct(string $name,
                                
                                string $espece,
                                int $longevite ,
                                string $alimentation,
                                string $urlimage,
                                ) 
    {
        $this ->name = $name ;
        $this ->espece = $espece ;
        $this ->longevite = $longevite ;
        $this ->alimentation = $alimentation ;
        $this ->urlimage = $urlimage ;
        ;

    }

    public function __toString(){
        return "Votre chat est :  " . $this -> name ."<br> Il est " . $this -> espece . "<br> il mange : " . $this -> alimentation . "<br> sa longévité est de " . $this -> longevite ." ans <br>" . $this -> urlimage . "<br> voici a quoi il ressemble.";
    }

    public function getname()
 {
    if (strlen($this -> name >= 2))
    {
    return "$this->name";
    }
 }
    public function getespece()
 {
    if (strlen($this -> espece < 20))
    {
    return "$this->espece";
    }
 }
    public function getlongevite()
 {
    if ($this -> longevite > 0)
    {
    return "$this->longevite";
    }
 }
    public function geturlimage()
 {
    if ($this -> urlimage == 2)
    {
    return "$this->urlimage";
    }
 }
    public function getalimentation()
 {
    if ($this -> alimentation > 0)
    {
    return "$this->alimentation";
    }
 }




 public function setname(string $name){
    if (strlen($name) >= 2) {
        $this->name = $name;
  }
 }
 public function setespece(string $espece){
    if (strlen($espece) < 20) {
        $this->name = $espece;
  }
 }
 public function setlongevite(string $longevite){
    if ($longevite > 0) {
        $this->name = $longevite;
  }
 }
 public function setalimentation(string $alimentation){
    if ($alimentation > 0) {
        $this->name = $alimentation;
  }
 }

}





 

