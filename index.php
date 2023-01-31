<?php
require 'layout/header.php';
require 'lib/functions.php';


$cars = get_cars();
echo "<pre>";
print_r($cars);
echo "</pre>";


$ships = getShips();
echo "<pre>";
print_r($ships);
echo "</pre>";

//$var = "Reena Raghavan";
//$age = 37;
//$pupcount = rand();
//
//
//echo "I am ".$var.".";
//echo "<br>";
//echo "I am ".$age." years old.";
//echo "<br>";
//// Functions
//echo(rand(10,100));
//echo "<br>";
//echo strrev(strtolower("Testing string to lower"));
//
//
//// Indexed Array
//$pet1= "Dog";
//$pet2= "Cat";
//$pet3= "Birds";
//$pets = array($pet1, $pet2, $pet3);
//echo "<br>";
//foreach($pets as $pet){
//  echo $pet;
//  echo "<br>";
//}
//var_dump($pets);
//
//
//// Associative Array
//$bio = array(
//  'name'=> "Reena Raghavan",
//  'age'=> "37 Years",
//  'location'=>"Pulpally",
//  'married'=>"Married"
//);
//echo "<br>";
//echo $bio['name'];
//echo "<br>";
//echo $bio['age'];
//echo "<br>";
//echo $bio['location'];
//echo "<br>";
//echo $bio['married'];
//echo "<br>";
//
//
//// Multi-dimensional Array
//$carFeature = array(
//  'name'=> "Brezza",
//  'price'=> "100",
//  'fuel'=> "petrol"
//);
//$car1= "Alto";
//$car2= "Ciaz";
//$car3= "Ertiga";
//$cars = array($car1, $car2, $car3, $carFeature);
//var_dump($cars);
//$carcount = count($cars);
//echo "<br>";
//echo $carcount;
//echo "<br>";
//
//$cars = array_reverse($cars);
//var_dump($cars);
//echo "<br>";
//
//$petsjson = file_get_contents("data/pets.json");
//$petsjson = json_decode($petsjson, true);
//print_r($petsjson);
//echo "<br>";
//
//$test = something();
//print_r($test);
//echo "<br>";

//Form
// define variables and set to empty values

//header('Location:/contactus.php');
//$nameErr = "";
//$name = "";
//if(isset($_POST["name"])){
//  $nam = $_POST["name"];
//}
//else{
//  $nam = "";
//}
//
//$pets_old = get_pets();
//$newpets = array(
//  'name'=> $nam,
//  'age'=> 2,
//  'location'=> "Pulpally"
//);
//$pets_old[] = $newpets;
//  $json = json_encode($pets_old);
//file_put_contents('data/pets.json',$json);
//
//echo "<br>";
//echo "<br>";
//var_dump($nam);
//echo "<br>";
//echo "<br>";
//
?>
<!--<form method="POST" action="index.php" >-->
<!--  Name: <input type="text" name="name" value="--><?php //echo $name;?><!--">-->
<!--  <span class="error">* --><?php //echo $nameErr;?><!--</span>-->
<!--  <br><br>-->
<!---->
<!--<input type="submit" name="submit" value="Submit">-->
<!--</form>-->
<?php
//echo $name;
//echo "<br>";
//
//
//require 'layout/footer.php';



