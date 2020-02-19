<?php
interface Hydrate
{
  /**
   * oblige à utiliser la méthode Hydrate avec un array en paramètre
   */
  public function hydrate(array $values);
}
