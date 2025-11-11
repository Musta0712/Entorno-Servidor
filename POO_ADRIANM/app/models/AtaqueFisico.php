<?php

class AtaqueFisico extends Ataque {
    private bool $contacto;

    public function __construct(string $nombre, int $poder, int $precision, Tipo $tipo) {
        parent::__construct($nombre, $poder, $precision, $tipo);
        $this->contacto = true;
    }

    public function getContacto()
    {
        return $this->contacto;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function mostrarInfo(): void {
        parent::mostrarInfo();
        echo "Ataque de contacto: " . ($this->contacto ? "Sí" : "No") . "<br>";
    }
}