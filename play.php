<?php
require_once __DIR__.'/lib/Ship.php';
require_once  __DIR__.'/lib/functions.php';

/**
 * @param Ship $someship
 */
function printShipSummary($someship){
  echo "Ship1 Name is :". $someship->name;
  echo "<br>";
  echo "Ship2 Name is :". $someship->getName();
  echo "<br>";
  echo "Ship Power :". $someship->weaponPower;
  echo "<br>";
  echo $someship->getNameandSpec(false);
  echo "<br>";
  echo $someship->getNameandSpec(true);
}

$myship = new Ship();
$myship->name = "Reena Raghavan";
$myship->weaponPower = 10;

$othership = new Ship();
$othership->name = "Ragesh Raghavan";
$othership->weaponPower = 20;

printShipSummary($myship);
printShipSummary($othership);
$ships = getShips();
echo "<pre>";
print_r($ships);
echo "</pre>";

foreach ($ships as $ship){
  echo $ship->name;
  echo $ship->weaponPower;
}

//$someship->sayHello();
//echo "<br>";
//$someship->getName();




