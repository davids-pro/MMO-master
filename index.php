<?php
include('interface/Hydrate.php');
include('class/Hydratation.php');
include('class/Personnage.php');
include('class/Barde.php');
include('class/Guerrier.php');
include('class/Mage.php');
include('class/Voleur.php');

$erkul = new Guerrier('Erkul', 50, 50, 100);

var_dump($erkul);
