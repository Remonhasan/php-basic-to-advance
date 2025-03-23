<?php
require_once 'Animal.php';
require_once 'Plant.php';

use Animal\Dog as AnimalDog;
use Plant\Dog as PlantDog;

$animalDog = new AnimalDog();
$animalDog->speak();

$plantDog = new PlantDog();
$plantDog->speak();

?>