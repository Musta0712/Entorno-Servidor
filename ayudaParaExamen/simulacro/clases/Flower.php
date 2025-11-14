<?php
require_once $_SERVER["DOCUMENT_ROOT"] .  "/ayudaParaExamen/simulacro/clases/Plant.php";

class Flower extends Plant
{

    private string $floweringMonth;

    function __construct($species, $height, $floweringMonth)
    {
        parent::__construct($species, $height);
        $this->floweringMonth = $floweringMonth;
    }

    function __tostring()
    {
        return "Flor " . parent::__tostring()
            . " Su mes de floracion es "
            . $this->floweringMonth . ".";
    }
}