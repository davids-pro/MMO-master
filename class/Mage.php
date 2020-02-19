<?php
class Mage extends Personnage
{
    private $mana;
    private $intelligence;

    public function __construct($nom, $force, $sante, $mana, $intelligence)
    {
        parent::__construct($nom, $force, $sante);
        $this->setMana($mana);
        $this->setIntelligence($intelligence);
    }

    //GETTER

    /**
     * return $mana
     * type: integer
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * return $intelligence
     * type: integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    //SETTER

    /**
     * set value $mana
     * type: integer
     */
    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }

    /**
     * set value $intelligence
     * type: integer
     */
    public function setIntelligence(int $intelligence)
    {
        $this->intelligence = $intelligence;
    }

    /**
     * METHODS
     */
    public function sort(Mage $mage)
    {
        echo "je suis " . $mage->getNom() . " et je suis plein d'énergie ";
    }
}
