<?php
class Hydratation
{
  // contient la valeur des objets
  private $values;
  // contient le tableau de résultats
  private $result = [];

  // lance le setter à l'instanciation de l'objet
  public function __construct(array $array)
  {
    // dans l'objet courant, lance la méthode setValues et on passe le tableau en paramètre
    $this->setValues($array);
  }

  /**
   * set $values
   * type array
   */
  public function setValues(array $values)
  {
    // dans l'object courant, dans l'attribut values, donne la valeur de $values
    $this->values = $values;
  }

  /**
   * set $result
   * type array
   */
  public function setResult(array $result)
  {
    // dans l'object courant, dans l'attribut result, donne la valeur de $result
    $this->result = $result;
  }

  /**
   * get $result
   * type array
   */
  public function getResult()
  {
    // retourne la valeur de l'attribut result de l'objet courant
    return $this->result;
  }

  /**
   * methode
   * 
   */
  public function hydrate()
  {
    // initialise une variable qui contient un tableau vide
    $tempArray = [];
    // on boucle sur les attributs values en sortant la clé et la valeur
    foreach ($this->values as $key => $value) {
      // initialise une variable de type string qui commence par set avec un concat de Key
      $method = 'set' . ucfirst($key);
      // insére dans le tableau temporaire un tableau qui contient string, valeur
      array_push($tempArray, [$method, $value]);
    }
    // appelle la méthode setResult dans l'objet courant
    $this->setResult($tempArray);
  }
}
