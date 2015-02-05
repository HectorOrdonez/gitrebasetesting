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
    protected $name;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
}
