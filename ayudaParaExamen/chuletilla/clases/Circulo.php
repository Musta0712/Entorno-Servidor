<?php 

require_once "Figura.php";

class Circulo extends Figura {
    private float $radio;

    public function __construct(string $color, float $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    /**
     * Get the value of radio
     */ 
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Set the value of radio
     *
     * @return  self
     */ 
    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }

    public function area(): float {
        return pi() * pow($this->radio, 2);
    }

    public function perimetro(): float {
        return 2 * pi() * $this->radio;
    }

    public function __toString(): string {
        return "Círculo. " . parent::__toString() . "Radio: " . $this->radio . ". ";
    }
}