<?php
 
class Animal
{
 
    private string $nom;
    private string $espece;
    private string $urlImage;
    private int $longevite;
    private array $alimentation;
 
    public function __construct(
        string $nom,
        string $espece,
        string $urlImage,
        int $longevite,
        array $alimentation
    ){
        $this->nom = $nom;
        $this->espece = $espece;
        $this->urlImage = $urlImage;
        $this->longevite = $longevite;
        $this->alimentation = $alimentation;
    }
 
    public function getNom() : string {
        return $this->nom;
    }
 
    public function setNom( string $nom ){
        if(strlen($nom)>=2){
            $this->nom = $nom;
        }
 
    }
 
    public function getEspece(): string
    {
        return $this->espece;
    }
 
    public function setEspece(string $espece)
    {
        if(strlen($espece)<=20){
            $this->espece = $espece;
        }
    }
 
    public function setUrlImage(string $urlImage)
    {
       if(str_ends_with($urlImage, ".jpg") ||str_ends_with($urlImage, ".png") ){
        $this->urlImage = $urlImage;
       }
    }
 
    public function setLongevite(int $longevite)
    {
   
        if($longevite>0){
            $this->longevite=$longevite;
        }
    }
 
    public function setAlimentation(array $alimentation)
    {
        if(count($alimentation)>0){
            $this->alimentation = $alimentation;
        }    
    }
 
    public function getUrlImage(): string
    {
        return $this->urlImage;
    }
 
    public function getLongevite(): int
    {
        return $this->longevite;
    }
 
    public function getAlimentation(): array
    {
        return $this->alimentation;
    }
   
    // public function manger(){
    //     foreach($this->alimentation as $alimentation){
    //         echo $aliment
    //  }
    // }

    public function __toString(){
        $result = $this->nom ." " .
        $this->espece.    " " .
        $this->longevite. " " .
        $this->aliments. " " .
        '<img src=""' . $this->urlImage . ">";



        foreach($this->alimentation as $aliment){
            $aliments = $aliments + $aliment;
        }

        return 
         
        // Minou le chat 10 ans img et tt les elements de l'alimentation
    }
    public function dormir() {
        echo "Le " .  $this->nom . " dort. <br>";
        //le nom dort
    }
 
    public function avancer(int $distance){
        echo $this->nom . "à fait 50km. ";
        //le nom a fait 50 km
    }
 
 
 
}
