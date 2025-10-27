<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/PHPU2/sports/Sport.php";
class Tennis extends Sport
{

    public function __construct(
        private string $court,
        private $rackets,
        $type, 
        $contact, 
        $numPlayers
    ) {
     parent::__construct($type, $contact, $numPlayers);
    }

    public function play(): string
    {
        return "Estoy jugando al Tenis";
    }

    public function addRacket(String $racket)
    {
        $this->rackets[] = $racket;
        return $this->rackets;
    }
}