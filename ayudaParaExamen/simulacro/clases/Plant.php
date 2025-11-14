<?php
abstract class Plant
{
    private string $species;
    private float $height;

    function __construct($species, $height)
    {
        $this->species = $species;
        $this->height = $height;
    }

    public function grow(float $cm)
    {
        $this->height += $cm;
    }

    public function __tostring()
    {
        return $this->species
            . ": altura "
            . $this->height . " cm.";
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}