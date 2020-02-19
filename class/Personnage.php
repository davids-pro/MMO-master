<?php
class Personnage
{
  private $nom;
  private $force;
  private $sante;

  public function __construct($nom, $sante, $force)
  {
    $values = ['nom' => $nom, 'sante' => $sante, 'force' => $force];
    $this->hydrate($values);
  }

  public function hydrate($values)
  {
    foreach ($values as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this, $method)) {
        $this->{$method}($value);
      }
    }
  }

  /**
   * GETTER NOM
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * GETTER FORCE
   */
  public function getForce()
  {
    return $this->force;
  }

  /**
   * GETTER SANTE
   */
  public function getSante()
  {
    return $this->sante;
  }

  /**
   * SETTER NOM: string
   */
  public function setNom(string $nom)
  {
    $this->nom = $nom;
  }

  /**
   * SETTER FORCE: int
   */
  public function setForce(int $force)
  {
    $this->force = $force;
  }

  /**
   * SETTER SANTE: int
   */
  public function setSante(int $sante)
  {
    $this->sante = $sante;
  }

  /**
   * METHODS
   */
  public function seDeplacer(Personnage $personnage)
  {
    echo 'Je suis' . $personnage->getNom() . ' et je me deplace';
  }

  public function parler(Personnage $personnage)
  {
    echo 'Je suis' . $personnage->getNom() . ' et je parle';
  }
}
