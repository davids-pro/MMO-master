<?php
include('Personnage.php');

class Barde extends Personnage
{
    private $mana;
    private $esprit;
    private $puissanceSacre;

    function __construct($nom, $sante , $force, $mana, $esprit, $puissanceSacre)
    {
        parent::__construct($nom, $force, $sante);
        $this->setMana($mana);
        $this->setEsprit($esprit);
        $this->setPuissanceSacre($puissanceSacre);
    }



    /* GETTERS */

    /*
    * return $mana
    * type: string
    */
    public function getMana() {
        return $this->mana;
    }

    /*
    * return $esprit
    * type: integer
    */
    public function getEsprit() {
        return $this->esprit;
    }

    /*
    * return $puissanceSacre
    * type: integer
    */
    public function getPuissanceSacre() {
        return $this->puissanceSacre;
    }

    /* SETTERS */

    /*
    * get value $nom
    * type: string
    */
    public function setMana(string $mana) {
        $this->mana = $mana;
    }

    /*
    * get value $esprit
    * type: integer
    */
    public function setEsprit(int $esprit) {
        $this->esprit = $esprit;
    }

    /*
    * get value $puissanceSacre
    * type: int
    */
    public function setPuissanceSacre(int $puissanceSacre) {
        $this->puissanceSacre = $puissanceSacre;
    }

    function Soigner(Barde $barde) {
        echo 'Je suis ' . $barde->getNom() . ' et je soigne';
    }

}

$Anduin = new Barde('Anduin' , 65 , 20 , 200 , 80, 50);
var_dump($Anduin);
$Anduin->Soigner($Anduin);