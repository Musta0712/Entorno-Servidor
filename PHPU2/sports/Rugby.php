<?php
class Rugby extends Sport
{
    private string $teamName;

    public function __construct(string $teamName, $type, $contact, $numPlayers){
      $this->teamName = $teamName;
      parent::__construct($type, $contact, $numPlayers);
    }

    public function play(): string
    {
        return "Estoy jugando al Rugby";
    }

    public function __toString()
    {
        $ret = parent::__toString();
        $ret .= " - Nombre del equipo: " . $this->teamName;
        return $ret;
    }
}