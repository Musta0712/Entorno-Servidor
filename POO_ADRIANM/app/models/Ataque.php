<?php

abstract class Ataque {
    private string $nombre;
    private int $poder;
    private int $precision;
    private Tipo $tipo;
    private string $descripcion = '';

    public function __construct(string $nombre, int $poder, int $precision, Tipo $tipo) {
        $this->nombre = $nombre;
        $this->poder = $poder;
        $this->precision = $precision;
        $this->tipo = $tipo;
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

    public function getPoder()
    {
        return $this->poder;
    }

    public function setPoder($poder)
    {
        $this->poder = $poder;

        return $this;
    }

    public function getPrecision()
    {
        return $this->precision;
    }

    public function setPrecision($precision)
    {
        $this->precision = $precision;

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

    public function mostrarInfo(): void {
        echo "Ataque: {$this->nombre}, 
        Poder: {$this->poder}, 
        Precisión: {$this->precision}%, 
        Tipo: {$this->tipo->getNombre()}<br/>";
    }

    public function editarDescripcion(string $nuevaDescripcion): void {
        $this->descripcion = $nuevaDescripcion;
    }

    abstract public function mostrarDaño(): void;
}