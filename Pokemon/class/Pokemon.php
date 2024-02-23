<?php
class Pokemon
{
    private string $name;
    protected int $hP;
    protected int $atk;

    protected string $urlImage;

    /**
     * Constructeur de la classe pokemon
     * @param string $name the name of the pokemon 
     * @param  int $hP the healpoint of the pokemon
     */
    public function __construct(string $name, int $hP, int $atk, string $UrlImage)
    {
        $this->name = $name;
        $this->hP = $hP;
        $this->atk = $atk;
        $this->urlImage = $UrlImage;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setHP(int $hP)
    {
        if ($hP >= 0) {
            $this->hP = $hP;
        } else {
            $this->hP = 0;
        }
    }
    public function getHP(): int
    {
        return $this->hP;
    }
    public function getAtk(): int
    {
        return $this->atk;
    }
    public function setAtk(int $atk)
    {
        $this->atk = $atk;
    }

    public function isDead(): bool
    {
        return $this->hP == 0;
    }

    public function attaquer(Pokemon $adversaire)
    {
        $adversaire->setHP($adversaire->getHP() - $this->atk);
    }

    public function __toString()
    {
        return
            "type : " . get_class($this) .
            "nom : " . $this->name .
            "son nombre de points de vie est " . $this->hP .
            "son attaque est de " . $this->atk . ". <br>";
    }

    /**
     * Get the value of urlImage
     *
     * @return string l'url de l'image
     */
    public function getUrlImage(): string
    {
        return $this->urlImage;
    }

    /**
     * Set the value of urlImage
     *
     * @param string $urlImage
     *

     */
    public function setUrlImage(string $urlImage)
    {
        $this->urlImage = $urlImage;
    }
}
