<?php
class Ship
{
  public $name;

  public $weaponPower = 0;
  public function sayHello()
  {
    echo "Hello";
  }
  public function getName()
  {
    return $this->name;

  }
  public function getNameandSpec($useShortFormat){
    if($useShortFormat) {
      return sprintf(
        '%s/%s',
        $this->name,
        $this->weaponPower
      );
    }
    else{
      return sprintf(
        'Name:%s, Weapon:%s',
        $this->name,
        $this->weaponPower
      );
    }
  }
}
