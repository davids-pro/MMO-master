<?php
// implementation de l'interface Hydrate qui oblige à utiliser la méthode hydrate()
class Personnage implements Hydrate
{
  private $nom;
  private $force;
  private $sante;

  public function __construct($nom, $sante, $force)
  {
    // initialise tableau associatif $values qui contient nos paramètres de constructeur
    $values = ['nom' => $nom, 'sante' => $sante, 'force' => $force];
    // on appelle dans l'objet courant la méthode hydrate qui contient notre tableau associatif
    $this->hydrate($values);
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
  public function hydrate(array $values)
  {
    // initialise une nouvelle instance de l'objet Hydratation dans lequel on passe le tableau associatif
    $hydratation = new Hydratation($values);
    // on appelle la méthode hydrate dans l'objet Hydratation
    $hydratation->hydrate();
    // on boucle sur le retour du getter de l'objet, et on récupère la valeur à chaque index
    foreach ($hydratation->getResult() as $value) {
      // si la méthode existe dans l'objet courant
      if (method_exists($this, $value[0])) {
        // on appelle la méthode en question avec le paramètre 
        $this->{$value[0]}($value[1]);
      }
    }
  }

  public function seDeplacer(Personnage $personnage)
  {
    echo 'Je suis' . $personnage->getNom() . ' et je me deplace';
  }

  public function parler(Personnage $personnage)
  {
    echo 'Je suis' . $personnage->getNom() . ' et je parle';
  }
}
