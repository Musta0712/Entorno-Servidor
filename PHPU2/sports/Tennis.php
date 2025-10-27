<?php
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
}