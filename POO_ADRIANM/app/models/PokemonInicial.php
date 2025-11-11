<?php

class PokemonInical extends Pokemon {
    private string $evolucion;
    private Tipo $tipoInicial;

    public function __construct(string $evolucion, Tipo $tipoInicial) { //Si pongo todo el contruct no funciona bien
        $this->evolucion = $evolucion;
        $this->tipoInicial = $tipoInicial;
    }

    public function getEvolucion()
    {
        return $this->evolucion;
    }

    public function setEvolucion($evolucion)
    {
        $this->evolucion = $evolucion;

        return $this;
    }

    public function getTipoInicial()
    {
        return $this->tipoInicial;
    }

    public function setTipoInicial($tipoInicial)
    {
        $this->tipoInicial = $tipoInicial;

        return $this;
    }
        public function mostrarCategoria(): void {
        echo "Este Pokémon es inicial.\n";
    }
}