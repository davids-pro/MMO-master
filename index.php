<?php
include('interface/Hydrate.php');
include('class/Hydratation.php');
include('class/Personnage.php');
include('class/Barde.php');
include('class/Guerrier.php');
include('class/Mage.php');
include('class/Voleur.php');

$erkul = new Guerrier('Fatima', 100, 1, 2);

var_dump($erkul);
