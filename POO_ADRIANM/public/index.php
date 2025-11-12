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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/styles.css">
    <title>POO</title>
</head>
<body>
    <?php
            // --- CREAR TIPOS (18) ---
        $normal = new Tipo("Normal", ["Lucha"], []);

        $fuego = new Tipo("Fuego", ["Agua"], ["Planta", "Hielo"]);

        $agua = new Tipo("Agua", ["Eléctrico", "Planta"], ["Fuego", "Roca"]);

        $planta = new Tipo("Planta", ["Fuego", "Hielo"], ["Agua", "Roca"]);

        $acero = new Tipo("Acero", ["Fuego", "Lucha", "Tierra"], ["Hada", "Hielo", "Roca"]);

        $bicho = new Tipo("Bicho", ["Fuego", "Volador", "Roca"], ["Planta", "Psíquico", "Siniestro"]);

        $dragon = new Tipo("Dragón", ["Hielo", "Dragón", "Hada"], ["Dragón"]);

        $electrico = new Tipo("Eléctrico", ["Tierra"], ["Agua", "Volador"]);

        $hada = new Tipo("Hada", ["Veneno", "Acero"], ["Lucha", "Dragón", "Siniestro"]);

        $lucha = new Tipo("Lucha", ["Volador", "Psíquico", "Hada"], ["Normal", "Roca", "Acero"]);

        $fantasma = new Tipo("Fantasma", ["Fantasma", "Siniestro"], ["Psíquico", "Fantasma"]);

        $hielo = new Tipo("Hielo", ["Fuego", "Lucha", "Roca", "Acero"], ["Planta", "Tierra", "Volador", "Dragón"]);

        $psiquico = new Tipo("Psíquico", ["Bicho", "Fantasma", "Siniestro"], ["Lucha", "Veneno"]);

        $volador = new Tipo("Volador", ["Eléctrico", "Hielo", "Roca"], ["Planta", "Lucha", "Bicho"]);

        $veneno = new Tipo("Veneno", ["Tierra", "Psíquico"], ["Planta", "Hada"]);

        $roca = new Tipo("Roca", ["Agua", "Planta", "Lucha", "Tierra", "Acero"], ["Fuego", "Hielo", "Volador", "Bicho"]);

        $siniestro = new Tipo("Siniestro", ["Lucha", "Bicho", "Hada"], ["Psíquico", "Fantasma"]);

        $tierra = new Tipo("Tierra", ["Agua", "Planta", "Hielo"], ["Fuego", "Eléctrico", "Veneno", "Roca", "Acero"]);


        $tipos = [$normal, $fuego, $agua, $planta, $electrico, $hielo, $psiquico, $volador, $veneno, 
                $roca, $siniestro, $acero, $bicho, $dragon, $hada, $lucha, $fantasma, $tierra];
        echo "<h2>Tipos Pokémon</h2>";
        foreach ($tipos as $tipo) {
            $tipo->mostrarInfo();
        }
        echo "<hr>";


        // --- CREAR ATAQUES ---
        $nitrocarga = new AtaqueFisico("Nitrocarga", 50, 100, $fuego);
        $hidrobomba = new AtaqueEspecial("Hidrobomba", 110, 80, $agua);
        $llamarada = new AtaqueEspecial("Llamarada", 90, 85, $fuego);
        $placaje = new AtaqueFisico("Placaje", 50, 100, $normal);
        $rayo = new AtaqueEspecial("Rayo", 90, 100, $electrico);

        $ataques = [$nitrocarga, $hidrobomba, $llamarada, $placaje];
        echo "<h2>Ataques Pokémon</h2>";
        foreach ($ataques as $ataque) {
            $ataque->mostrarInfo();
        }
        echo "<hr>";

        // --- CREAR GENERACION ---
        $gen1 = new Generacion(1, "Kanto", "Primera Generación");
        echo "<h2>Generación</h2>";
        $gen1->mostrarInfo();
        echo "<hr>";

        // --- CREAR POKEMON INICIAL ---
        $charmander = new PokemonInicial(
            "Charmander", 4, "Charmander, el Pokémon lagartija de fuego.",
            [$fuego], [$nitrocarga, $llamarada], $gen1,
            "Charmeleon", $fuego
        );

        $bulbasaur = new PokemonInicial(
            "Bulbasaur", 1, "Bulbasaur, el Pokémon semilla.",
            [$planta], [$placaje], $gen1,
            "Ivysaur", $planta
        );

        $squirtle = new PokemonInicial(
            "Squirtle", 7, "Squirtle, el Pokémon tortuga de agua.",
            [$agua], [$hidrobomba, $placaje], $gen1,
            "Wartortle", $agua
        );
        $iniciales = [$charmander, $bulbasaur, $squirtle];
        echo "<h2>Pokémon Iniciales</h2>";
        foreach ($iniciales as $p) {
            $p->mostrarInfo();
            $p->mostrarCategoria();
            echo "<h4>Ataques:</h4>";
            foreach ($p->getAtaques() as $ataque) {
                $ataque->mostrarInfo();
            }
            echo "<hr>";
        }

        // --- CREAR POKEMON LEGENDARIO ---
        $articuno = new PokemonLegendario(
            "Articuno", 144, "Articuno, Pokémon legendario de hielo y vuelo.",
            [$hielo, $volador = new Tipo("Volador", [], [])], [$hidrobomba],
            $gen1, "Islas de hielo", "Evento especial"
        );

        echo "<h2>Pokémon Legendario</h2>";
        $articuno->mostrarInfo();
        $articuno->mostrarCategoria();
        echo "<h4>Ataques:</h4>";
        foreach ($articuno->getAtaques() as $ataque) {
            $ataque->mostrarInfo();
        }
        echo "<hr>";

        // --- CREAR POKEMON SALVAJE ---
        $pikachu = new PokemonSalvaje(
            "Pikachu", 25, "Pikachu, el Pokémon ratón eléctrico.",
            [$electrico], [$placaje, $rayo], $gen1, "Bosque de Viridian"
        );

        echo "<h2>Pokémon Salvaje</h2>";
        $pikachu->mostrarInfo();
        $pikachu->mostrarCategoria();
        echo "<h4>Ataques:</h4>";
        foreach ($pikachu->getAtaques() as $ataque) {
            $ataque->mostrarInfo();
        }
        echo "<hr>";

        // --- CREAR USUARIO ---
        $usuario1 = new Usuario(1, "Musta", "musta@pokemon.com", "gengar123");
        echo "<h2>Usuario</h2>";
        echo "Nombre: " . $usuario1->getNombreUsuario() . "<br>";
        echo "Email: " . $usuario1->getEmail() . "<br>";
    ?>
</body>
</html>

