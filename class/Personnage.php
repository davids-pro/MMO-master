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
