<?php

require_once "Figura.php";
class Rectangulo extends Figura {
    private float $ancho;
    private float $alto;

    public function __construct(string $color, float $ancho, float $alto) {
        parent::__construct($color);
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    /**
     * Get the value of ancho
     */ 
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set the value of ancho
     *
     * @return  self
     */ 
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;

        return $this;
    }

    /**
     * Get the value of alto
     */ 
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * Set the value of alto
     *
     * @return  self
     */ 
    public function setAlto($alto)
    {
        $this->alto = $alto;

        return $this;
    }

    public function area(): float {
        return $this->ancho * $this->alto;
    }

    public function perimetro(): float {
        return 2 * ($this->ancho + $this->alto);
    }

    public function __toString(): string {
        return "Rectángulo. " . parent::__toString() . "Ancho: " . $this->ancho . ". Alto: " . $this->alto . ". ";
    }
}