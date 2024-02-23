<?php


class PokemonEau extends Pokemon
{


    public function __construct(string $name, int $hP, int $atk, string $urlImage)
    {
        parent::__construct($name, $hP, $atk, $urlImage);
    }




    public function attaquer(Pokemon $adversaire)
    {
        if ($adversaire instanceof PokemonFeu) {
            $adversaire->setHP($adversaire->getHP()
                - (2 * $this->atk));
        } elseif (
            $adversaire instanceof PokemonPlante
            || $adversaire instanceof PokemonEau
        ) {
            $adversaire->setHP($adversaire->getHP() - (0.5 * $this->atk));
        } else {
            parent::attaquer($adversaire);
        }
    }
}
