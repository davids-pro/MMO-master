<?php
class Hydratation implements Hydrate
{
  private $values;
  private $result = [];

  public function __construct(array $array)
  {
    $this->setValues($array);
  }

  /**
   * SETTER
   */
  public function setValues(array $values)
  {
    $this->values = $values;
  }

  public function setResult(array $result)
  {
    $this->result = $result;
  }

  /**
   * GETTER
   */
  public function getResult()
  {
    return $this->result;
  }
  
  /**
   * HYDRATATION
   */
  public function hydrate()
  {
    $tempArray = [];
    foreach ($this->values as $key => $value) {
      $method = 'set' . ucfirst($key);
      array_push($tempArray, [$method, $value]);
    }
    $this->setResult($tempArray);
  }
}
