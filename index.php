<?php
include 'abstractWinkelwagen.php';
include 'Drink.php';
include 'Food.php';
include 'winkelWagen.php';

$winkelwagen = new winkelWagen('lidl', 50, 'red');

$drinks = new Drink('aa', 'efw', 2);
$drinks2 = new Drink('aa', 'efw', 2);
$drinks3 = new Drink('aa', 'efw', 2);

$winkelwagen->setDrinks($drinks);
$winkelwagen->setDrinks($drinks2);
$winkelwagen->setDrinks($drinks3);

$winkelwagen->printProduct();