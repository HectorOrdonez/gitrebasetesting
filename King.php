<?php

class King
{
    /**
     * @return mixed
     */
    public function getCastle()
    {
        return $this->castle;
    }

    /**
     * @param mixed $castle
     */
    public function setCastle(Castle $castle)
    {
        $this->castle = $castle;
    }

    /**
     * @var
     */
    protected $castle;

    protected $kingdom;

    /**
     * @return mixed
     */
    public function getKingdom()
    {
        return $this->kingdom;
    }

    /**
     * @param mixed $kingdom
     */
    public function setKingdom($kingdom)
    {
        $this->kingdom = $kingdom;
    }
}