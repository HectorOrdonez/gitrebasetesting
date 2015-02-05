<?php

class King
{
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