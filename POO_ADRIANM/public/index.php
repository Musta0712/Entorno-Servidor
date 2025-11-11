<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/Ataque.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/AtaqueEspecial.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/AtaqueFisico.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/Generacion.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/Pokemon.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/PokemonInicial.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/PokemonLegendario.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/PokemonSalvaje.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/Tipo.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/POO_ADRIANM/app/models/Usuario.php';

$fuego = new Tipo("Fuego", ["Agua", "Roca"], ["Planta", "Hielo"]);
$planta = new Tipo("Planta", ["Fuego", "Hielo"], ["Agua", "Roca"]);

