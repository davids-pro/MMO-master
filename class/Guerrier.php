<?php


class Guerrier extends Personnage
{
  private $muscle;

  function __construct($nom, $force, $sante, $muscle)
  {
    parent::__construct($nom, $force, $sante);
    $this->setMuscle($muscle);
  }

  /** 
   * GETTER MUSCLE
   */
  public function getMuscle()
  {
    return $this->muscle;
  }

  /**
   * SETTER MUSCLE: string
   */
  public function setMuscle(string $muscle)
  {
    $this->muscle = $muscle;
  }

  /**
   * METHODS
   */
  function seBattre(Guerrier $guerrier)
  {
    echo 'Je suis ' . $guerrier->getNom() . ' et je me bats';
  }
}
