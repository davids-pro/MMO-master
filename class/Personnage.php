<?php
class Personnage
{
  private $nom;
  private $force;
  private $sante;

  public function __construct($nom, $force, $sante)
  {
    $this->setNom($nom);
    $this->setForce($force);
    $this->setSante($sante);
  }

  /**
   * return: $nom
   * type: string
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * return: $force
   * type: integer
   */
  public function getForce()
  {
    return $this->force;
  }

  /**
   * return: $sante
   * type: integer
   */
  public function getSante()
  {
    return $this->sante;
  }

  /**
   * set value : $nom
   * type : string
   */
  public function setNom(string $nom)
  {
    $this->nom = $nom;
  }

  /**
   * set value : $force
   * type : integer
   */
  public function setForce(int $force)
  {
    $this->force = $force;
  }

  /**
   * set value : $sante
   * type : integer
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
