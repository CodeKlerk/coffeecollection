<?php

require_once('coffeecollection.php');
$Collection = new CoffeeCollection();

$Collection->setFarmers(7); // set the number of farmers in the village
$Collection->setDays(2); // set the number of days after which farmers give bags
$Collection->setBags(2); // set the number of bags given by each farmer
$Collection->printFarmers(); // set the number of bags given by each farmer


$Collection->giveBags(6, 8); // give bags to farmer number 6 & find out who's turn it will be after 8 days
//$Collection->printFarmers();
?>