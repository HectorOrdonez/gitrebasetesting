<?php

class Castle
{
    /**
     * @var Warrior[]
     */
    protected $warriors;

    protected $wallHeight;

    /**
     * @return mixed
     */
    public function getWallHeight()
    {
        return $this->wallHeight;
    }

    /**
     * @param mixed $wallHeight
     */
    public function setWallHeight($wallHeight)
    {
        $this->wallHeight = $wallHeight;
    }

    /**
     * @return Warrior[]
     */
    public function getWarriors()
    {
        return $this->warriors;
    }

    /**
     * @param Warrior $warrior
     */
    public function addWarrior(Warrior $warrior)
    {
        $this->warriors[] = $warrior;
    }
}