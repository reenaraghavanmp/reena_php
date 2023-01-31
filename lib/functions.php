<?php
require_once __DIR__.'/Ship.php';
function something(){
  return "Testing function";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function get_pets(){
$petsjson = file_get_contents("data/pets.json");
$petsjson = json_decode($petsjson, true);
return $petsjson;
}

function get_cars(){
 require 'config.php';
  $dbhost = $config['dbhost'];
  $username = $config['username'];
  $password = $config['password'];
  $dbname = $config['dbname'];
  $conn = mysqli_connect($dbhost, $username, $password, $dbname);

  if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
  }

// Perform query
  $result = mysqli_query($conn, "SELECT * FROM cars");
  $res = $result->fetch_all();

  return $res;

}

function getShips(){
  $ships = array();

  $myship = new Ship();
  $myship->setName("Jasna");
  $myship->setWeaponPower(40);

  $ships['NewShip'] = $myship;
  return $ships;

}
