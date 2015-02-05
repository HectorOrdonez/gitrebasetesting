<?php

/**
 * Class Armor
 */
class Armor
{
    /**
     * @var
     */
    protected $defense;

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }
}