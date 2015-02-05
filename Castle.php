<?php

/**
 * Class Castle
 */
class Castle
{
    /**
     * @var int
     */
    protected $wallHeight;

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
     * @var
     */
    protected $towers;

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
     * @var string
     */
    protected $name;

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
}
