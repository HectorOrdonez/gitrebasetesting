<?php

/**
 * Class Warrior
 */
class Warrior
{
    /**
     * @var string
     */
    protected $weapon;

    /**
     * @var Armor
     */
    protected $armor;

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param mixed $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @param mixed $armor
     */
    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;
    }
}