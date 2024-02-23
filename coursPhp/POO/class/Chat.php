<?php

class Chat{
    private string $name;
    // private restreint l'accès à l'attribut juste à la class
    private string $color;

    public int $age;

    public function __construct(string $name, string $color, int $age)
 {
    $this->name = $name;
    $this->color = $color;
    $this->age = $age;
 }

 public function eatFood($food){
    echo $this->name ." mange : ". $food;
 }

 public function getName()
 {
    return $this->name;
 }

 public function getColor(){
    return strtoupper ($this->color);
 }

 public function setName(string $name){
    if (strlen($name) >= 2) {
        $this->name = $name;
  }
 }

 public function setColor(string $color){
    $this->color = $color;
}
}