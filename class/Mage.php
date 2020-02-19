<?php
include('Personnage.php');
class Mage extends Personnage{

    private $mana;

    public function __construct($nom, $force, $sante, $mana)
        {
            parent::__construct($nom, $force, $sante);
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
$kamelito = new Mage('kamelito', 78, 100, 100 );
var_dump($kamelito);