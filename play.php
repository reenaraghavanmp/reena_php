<?php
require_once __DIR__.'/lib/Ship.php';
require_once  __DIR__.'/lib/functions.php';

/**
 * @param Ship $someship
 */
function printShipSummary($someship){
  echo "Ship1 Name is :". $someship->getName();
  echo "<br>";
  echo "Ship2 Name is :". $someship->getName();
  echo "<br>";
  echo "Ship Power :". $someship->getWeaponPower();
  echo "<br>";
  echo $someship->getNameandSpec(false);
  echo "<br>";
  echo $someship->getNameandSpec(true);
}

$myship = new Ship();
$myship->setName("Reena Raghavan");
$myship->setWeaponPower(10);

$othership = new Ship();
$othership->setName("Ragesh Raghavan");
$othership->setWeaponPower(20);

printShipSummary($myship);
printShipSummary($othership);
$ships = getShips();
echo "<pre>";
print_r($ships);
echo "</pre>";

foreach ($ships as $ship){
  echo $ship->getName();
  echo $ship->getWeaponPower();
}

//$someship->sayHello();
//echo "<br>";
//$someship->getName();




