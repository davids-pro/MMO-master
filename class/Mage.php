<?php

class Mage extends Personnage{

    private $mana;

    public function __construct($nom, $sante, $force, $mana)
        {
            parent::__construct($nom, $sante, $force);
            $this->setMana($mana);
        }

//GETTER

    /**
     * return $mana
     * type: integer
     */
    public function getMana(){
        return $this->mana;
    }

//SETTER

    /**
     * set value $mana
     * type: integer
     */
    public function setMana(int $mana){
        $this->mana = $mana;
    }

//METHODE SPECIFIQUE
    public function sort(Mage $mage){
        echo "je suis " . $mage->getNom() . " et je suis plein d'énergie ";
    }
}