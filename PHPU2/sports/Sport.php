<?php
abstract class Sport
{
    public function __construct(
    protected String $type,
    protected bool $contact,
    private int $numPlayers
    ){}

    /* Lo de arriba equivale a esto:
    protected String $type;
    protected bool $contact;
    private int $numPlayers;
    public function __construct(String $type, bool $contact, int $numPlayers){
        $this->type = $type;
        $this->contact = $contact;
        $this->numPlayers = $numPlayers;
    }
    */

    public function addPlayer(int $num): int
    {
        $this->numPlayers += $num;
        return $this->numPlayers;
    }

    public abstract function play(): string;

    public function __toString()
    {
        $ret = "Tipo: " . $this->type . " - Contacto: ";
        if ($this->contact){
            $ret .= "Si";
        } else {
            $ret += "No";
        }
        $ret .= " - Numero de jugadores: " . $this->numPlayers;
        return $ret;
    }
}