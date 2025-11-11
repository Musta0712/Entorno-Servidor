<?php

abstract class Pokemon {
    protected string $nombre;
    protected int $numeroPokedex;
    protected string $descripcion;
    protected array $tipo;// List<Tipo>
    protected array $ataques;// List<Ataque>
    protected Generacion $generacion;

    public function __construct(string $nombre, int $numeroPokedex, string $descripcion, array $tipo, array $ataques, Generacion $generacion) {
        $this->nombre = $nombre;
        $this->numeroPokedex = $numeroPokedex;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->ataques = $ataques;
        $this->generacion = $generacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNumeroPokedex()
    {
        return $this->numeroPokedex;
    }

    public function setNumeroPokedex($numeroPokedex)
    {
        $this->numeroPokedex = $numeroPokedex;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAtaques()
    {
        return $this->ataques;
    }

    public function setAtaques($ataques)
    {
        $this->ataques = $ataques;

        return $this;
    }
 
    public function getGeneracion()
    {
        return $this->generacion;
    }

    public function setGeneracion($generacion)
    {
        $this->generacion = $generacion;

        return $this;
    }

    public function mostrarInfo(): void {
        echo "<b>Pokémon #{$this->numeroPokedex} - {$this->nombre}</b><br>";
        echo "Generación: {$this->generacion->getNombre()} ({$this->generacion->getRegion()})<br>";
        echo "Descripción: {$this->descripcion}<br>";
    }

    public function editarDescripcion(string $nuevaDescripcion): void {
        $this->descripcion = $nuevaDescripcion;
    }

    abstract public function mostrarCategoria(): void; // Las subclases no tenian nada de info
}