<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/ayudaParaExamen/simulacro/clases/Plant.php";
//include "Planta.php";

class Tree extends Plant{
    private bool $perennial;
    function __construct($species, $height, $perennial){
        parent::__construct($species, $height);
        $this->perennial = $perennial;
    }

    //Esta no hace falta porque está declarada en la clase madre.
    public function grow(float $cm){
        parent::setHeight(parent::getHeight() + $cm);
    }

    function __tostring(){
        $text = "Arbol ";
        $text .= parent::__tostring();
        $text .= $this->perennial ? " Sí es perenne." : " No es perenne";
        return $text;
    }
}