<?php

class AtaqueEspecial extends Ataque {
    private int $energia;

    public function __construct(string $nombre, int $poder, int $precision, Tipo $tipo) {
        parent::__construct($nombre, $poder, $precision, $tipo);
        $this->energia = 100;
    }

    public function getEnergia()
    {
        return $this->energia;
    }

    public function setEnergia($energia)
    {
        $this->energia = $energia;

        return $this;
    }

    public function mostrarDaño(): void {
        parent::mostrarDaño();
        echo "Consumo de energía: {$this->energia}<br/>";
    }
}