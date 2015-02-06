<?php

/**
 * Class Castle
 */
class Castle
{
    /**
     * @var King
     */
    protected $king;

    /**
     * @var string
     */
    protected $castleName;

    /**
     * @var Warrior[]
     */
    protected $warriors;

    /**
     * @var int
     */
    protected $wallHeight;

    /**
     * @var
     */
    protected $towers;

    /**
     * @var Peasant[]
     */
    protected $peasants;

    public function test(){
        
    }

    /**
     * @return mixed
     */
    public function getTowers()
    {
        return $this->towers;
    }

    /**
     * @param mixed $towers
     */
    public function setTowers($towers)
    {
        $this->towers = $towers;
    }

    /**
     * @return mixed
     */
    public function getWallHeight()
    {
        return $this->wallHeight;
        return $this->wallHeight;
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
    
    /**
     * @return string
     */
    public function getCastleName()
    {
        return $this->castleName;
    }

    /**
     * @param string $castleName
     */
    public function setCastleName($castleName)
    {
        $this->castleName = $castleName;
    }

    /**
     * @return King
     */
    public function getKing()
    {
        return $this->king;
    }

    /**
     * @param King $king
     */
    public function setKing($king)
    {
        $this->king = $king;
    }

    /**
     * @return Peasant[]
     */
    public function getPeasants()
    {
        return $this->peasants;
    }

    /**
     * @param Peasant $peasant
     */
    public function addPeasant(Peasant $peasant)
    {
        $this->peasants[] = $peasant;
    }
}
