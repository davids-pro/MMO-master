<?php
class Guerrier extends Personnage
{
  private $rage;

  function __construct($nom, $force, $sante, $rage)
  {
    parent::__construct($nom, $force, $sante);
    $values = ['rage' => $rage];
    $hydratation = new Hydratation($values);
    $hydratation->hydrate();
    foreach ($hydratation->getResult() as $value) {
      if (method_exists($this, $value[0])) {
        $this->{$value[0]}($value[1]);
      }
    }
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
    echo "<h4 style='color:red'>" . "⚔️ " . 'Je suis ' . $guerrier->getNom() . ' et je me bats' . " ⚔️" . "</h4>";
  }
}
