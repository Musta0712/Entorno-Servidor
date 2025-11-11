<?php

class Tipo {
    private string $nombre;
    private array $debilContra;
    private array $fuerteContra;

    public function __construct(string $nombre, array $debilContra, array $fuerteContra) {
        $this->nombre = $nombre;
        $this->debilContra = $debilContra;
        $this->fuerteContra = $fuerteContra;
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

    public function getDebilContra()
    {
        return $this->debilContra;
    }

    public function setDebilContra($debilContra)
    {
        $this->debilContra = $debilContra;

        return $this;
    }

    public function getFuerteContra()
    {
        return $this->fuerteContra;
    }

    public function setFuerteContra($fuerteContra)
    {
        $this->fuerteContra = $fuerteContra;

        return $this;
    }

    public function mostrarInfo(): void {
        echo "Tipo: {$this->nombre}<br>";
    }

    public function compararVentajas(Tipo $t): string {

        if (in_array($t->getNombre(), $this->fuerteContra)) {
            return "{$this->nombre} es fuerte contra {$t->getNombre()}.";

        } else if (in_array($t->getNombre(), $this->debilContra)) {
            return "{$this->nombre} es débil contra {$t->getNombre()}.";

        } else {
            return "{$this->nombre} tiene ventaja neutral contra {$t->getNombre()}.";
        }
    }

    public function agregarDebilidad(Tipo $t): void {
        $this->debilContra[] = $t->getNombre();
    }

    public function agregarFortaleza(Tipo $t): void {
        $this->fuerteContra[] = $t->getNombre();
    }
}