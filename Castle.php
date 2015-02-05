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
}
