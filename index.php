<?php
function loadClass($class)
{
  require 'class/' . $class . '.php';
}
spl_autoload_register('loadClass');

$erkul = new Voleur('Erkul', 50, 50, 100);

$garrosh = new Guerrier('Garrosh', 100, 100, 0);

$anduin = new Barde('Anduin', 50, 45, 50, 20, 70);

$korva = new Mage('Korva', 2, 40, 100, 100);

var_dump($erkul);
var_dump($garrosh);
var_dump($anduin);
var_dump($korva);
