<?php


trait tankBattleTower
{
  protected $damage;
  protected $caliberType;

  protected function SetDamage($_damage)
  {
    $damage = $_damage;
  }

  protected function SetСaliber($_caliber)
  {
    $caliberType = $_caliber;
  }
}

trait TankCaterpillar
{
  protected $speed;
  protected function SetSpeed($_speed)
  {
    $speed = $_speed;
  }
}

trait TankHull
{
  protected $armorType;
  protected function setArmorType($_armorType)
  {
    $armorType = $_armorType;
  }
}

class Tank
{
  use tankBattleTower, TankCaterpillar, TankHull;
  public function getArmortype($_armorType)
  {
    $this->armorType = $_armorType;
  }

  public function getSpeed($_speed)
  {
    $this->speed = $_speed;
  }

  public function getDamage($_damage)
  {
    $this->damage = $_damage;
  }

  public function getCaliberType($_caliber)
  {
    $this->caliberType = $_caliber;
  }

  public function Statistic()
  {
    echo "Armor type $this->armorType\n";
    echo "Speed is $this->speed\n";
    echo "Damage is $this->damage\n";
    echo "Caliber is $this->caliberType\n";
  }
}

$t34 = new Tank;

$t34->getArmortype("Steel");
$t34->getCaliberType("76mm");
$t34->getSpeed(70);
$t34->getDamage(122);
$t34->Statistic();