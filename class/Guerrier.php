<?php
include('Personnage.php');
class Guerrier extends Personnage
{
  private $muscle;

  function __construct($nom, $force, $sante, $muscle)
  {
    parent::__construct($nom, $force, $sante);
    $this->setMuscle($muscle);
  }


  public function getMuscle()
  {
    return $this->muscle;
  }

  public function setMuscle(String $muscle)
  {
    $this->muscle = $muscle;
  }

  function seBattre(Guerrier $guerrier)
  {
    echo 'Je suis ' . $guerrier->getNom() . ' et je me bats';
  }
}
