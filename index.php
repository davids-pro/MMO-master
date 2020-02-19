<?php
function loadClass($class)
{
  require 'class/' . $class . '.php';
}
spl_autoload_register('loadClass');

$erkul = new Voleur('Erkul', 150, 2000, 9999);
var_dump($erkul);

$jean = new Guerrier('Jean', 9999, 5000, 'à donf');
var_dump($jean);
