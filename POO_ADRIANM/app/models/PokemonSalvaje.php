<?php

class PokemonSalvaje extends Pokemon {
    private string $habitat;
    
    public function __construct(string $habitat) {
        $this->habitat = $habitat;
    }

    public function getHabitat()
    {
        return $this->habitat;
    }

    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    public function mostrarCategoria(): void {
        echo "Este Pokémon es salvaje.\n";
    }
}