<?php

class Mage extends Personnage{

    private $mana;
//GETTER

    /**
     * return $mana
     * type: integer
     */
    public function getMana(){
        return $this->mana;
    }

//METHODE SPECIFIQUE
    public function sort(Mage $mage){
        echo "je suis " . $mage->getNom() . " et je suis plein d'énergie ";
    }
}