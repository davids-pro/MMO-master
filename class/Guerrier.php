<?php
class Guerrier extends Personnage
{
  private $rage;

  function __construct($nom, $force, $sante, $rage)
  {
    parent::__construct($nom, $force, $sante);
    $this->setRage($rage);
  }

  /** 
   * GETTER MUSCLE
   */
  public function getRage()
  {
    return $this->rage;
  }

  /**
   * SETTER MUSCLE: string
   */
  public function setRage(int $rage)
  {
    $this->rage = $rage;
  }

  /**
   * METHODS
   */
  function seBattre(Guerrier $guerrier)
  {
    echo "<h4 style='color:red'>" . "⚔️ " .'Je suis ' . $guerrier->getNom() . ' et je me bats' . " ⚔️" . "</h4>";
  }
}
