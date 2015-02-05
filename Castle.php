<?php

class Castle
{
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