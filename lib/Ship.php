<?php
class Ship
{
  private $name;

  private $weaponPower = 0;
  public function sayHello()
  {
    echo "Hello";
  }


  /**
   * @return int
   */
  public function getWeaponPower()
  {
    return $this->weaponPower;
  }

  /**
   * @param int $weaponPower
   */
  public function setWeaponPower($weaponPower)
  {
    $this->weaponPower = $weaponPower;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getNameandSpec($useShortFormat){
    if($useShortFormat) {
      return sprintf(
        '%s/%s',
        $this->getName(),
        $this->getWeaponPower()
      );
    }
    else{
      return sprintf(
        'Name:%s, Weapon:%s',
        $this->getName(),
        $this->getWeaponPower()
      );
    }
  }
}
