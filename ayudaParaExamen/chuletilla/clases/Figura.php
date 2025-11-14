<?php

abstract class Figura {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }
    

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    //El método abstracto area() : float
    abstract public function area(): float;

    //El método abstracto perimetro() : float
    abstract public function perimetro(): float;

    //Método __toString() que muestre el color.
    public function __toString(): string {
        return "Color: " . $this->color . ". ";
    }

}