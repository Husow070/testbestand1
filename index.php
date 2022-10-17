<?php
include "abstractWinkelwagen.php";
include "winkelWagen.php";
include "Drink.php";
include "Food.php";

$winkelwagen = new winkelWagen('lidl', 3, 'yellow');

$drinks = new Drink('fernandes' , 'sportdrank' , 13, 1.20 );
$drinks2 = new Drink('aa' , 'sportdrank' , 11, 1.23 );
$drinks3 = new Drink('aquaris' , 'sportdrank' , 10, 1.50 );

$winkelwagen->setDrinks($drinks);
$winkelwagen->setDrinks($drinks2);
$winkelwagen->setDrinks($drinks3);

$food = new Food('hamburger', 'snack' , 1.30);
$food2 = new Food('kip', 'snack' , 1.50);
$food3 = new Food('snoep', 'snack' , 1.90);

$winkelwagen->setFood($food);
$winkelwagen->setFood($food2);
$winkelwagen->setFood($food3);

$winkelwagen->printProduct();



