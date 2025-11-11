<?php

class PokemonLegendario extends Pokemon {
    private string $ubicacion;
    private string $evento;

    public function __construct(string $ubicacion, string $evento) {
        $this->ubicacion = $ubicacion;
        $this->evento = $evento;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getEvento()
    {
        return $this->evento;
    }

    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    public function mostrarCategoria(): void {
        echo "Este Pokémon es legendario.\n";
    }
}