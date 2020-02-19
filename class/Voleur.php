<?php
class Voleur extends Personnage
{
  private $agility;

  function __construct($nom, $force, $sante, $agility)
  {
    parent::__construct($nom, $force, $sante);
    $this->setAgility($agility);
  }

  /**
   * GETTER AGILITY
   */
  public function getAgility()
  {
    return $this->agility;
  }

  /**
   * SETTER AGILITY: int
   */
  public function setAgility(int $agility)
  {
    $this->agility = $agility;
  }

  /**
   * METHODS
   */
  function voler(Voleur $voleur)
  {
    echo "<h4 style='color:black'>" . 'Je suis ' . $voleur->getNom() . ' et je chourrave' . "</h4>";
  }
}
