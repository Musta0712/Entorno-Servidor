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
                                                                <!--Miércoles 12 de Noviembre -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/POO_ADRIANM/public/css/styles.css">
    <title>POO</title>
</head>
<body>
    <?php
                                                                // Martes 11 de Noviembre
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
        echo '<div class="tipos-grid">';
        foreach ($tipos as $tipo) {
            echo '<div class="tipo-card ' . $tipo->getNombre() . '">';
            $tipo->mostrarInfo();
            echo '</div>';
        }
        echo '</div>';
        echo "<hr>";


        // --- CREAR ATAQUES ---
        $nitrocarga = new AtaqueFisico("Nitrocarga", 50, 100, $fuego);
        $hidrobomba = new AtaqueEspecial("Hidrobomba", 110, 80, $agua);
        $llamarada = new AtaqueEspecial("Llamarada", 90, 85, $fuego);
        $placaje = new AtaqueFisico("Placaje", 50, 100, $normal);
        $rayo = new AtaqueEspecial("Rayo", 90, 100, $electrico);
        $pulsoDragon = new AtaqueEspecial("Pulso Dragón", 85, 90, $dragon);
        $terremoto = new AtaqueFisico("Terremoto", 100, 100, $tierra);
        //Para el articuno
        $ventisca = new AtaqueEspecial("Ventisca", 110, 70, $hielo);
        $rayoHielo = new AtaqueEspecial("Rayo Hielo", 90, 90, $hielo);
        $liofilizacion = new AtaqueEspecial("Liofilización", 80, 90, $hielo);
        $vendaval = new AtaqueEspecial("Vendaval", 120, 70, $volador);

        $ataques = [$pulsoDragon, $rayo, $llamarada, $placaje, $hidrobomba, $terremoto];


        echo "<h2>Ataques Pokémon</h2>";
        echo '<div class="ataques-grid">';
        foreach ($ataques as $ataque) {
            $tipoAtaque = $ataque->getTipo()->getNombre();
            echo '<div class="ataque-card ' . $tipoAtaque . '">';
            $ataque->mostrarInfo();
            echo '</div>';
        }
        echo '</div>';
        echo "<hr>";


        // --- CREAR GENERACION ---
        $gen1 = new Generacion(1, "Kanto", "Primera Generación");
        $gen2 = new Generacion(2, "Johto", "Segunda Generación");
        $gen3 = new Generacion(3, "Hoenn", "Tercera Generación");
        echo "<h2>Generación</h2>";
        echo '<div class="generacion-card">';
        $gen1->mostrarInfo();
        $gen2->mostrarInfo();
        $gen3->mostrarInfo();
        echo '</div>';
        echo "<hr>";

        // --- CREAR POKEMON INICIAL ---
        $charmander = new PokemonInicial(
            "Charmander", 4, "Charmander, el Pokémon lagartija de fuego.",
            [$fuego], [$nitrocarga, $llamarada], $gen1,
            "Charmeleon", $fuego
        );

        $chikorita = new PokemonInicial(
            "Chikorita", 152, "Chikorita, el Pokémon hierba.",
            [$planta], [$placaje], $gen2,
            "Bayleef", $planta
        );

        $mudkip = new PokemonInicial(
        "Mudkip", 258, "Mudkip, el Pokémon pez de tierra.",
        [$agua, $tierra], [$hidrobomba, $terremoto], $gen3,
        "Marshtomp", $agua
        
        );

        $iniciales = [$charmander, $chikorita, $mudkip];
        echo "<h2>Pokémon Iniciales</h2>";
        echo '<div class="pokemon-grid">';
        foreach ($iniciales as $p) {
            echo '<div class="pokemon-card">';
            $p->mostrarInfo();
            $p->mostrarCategoria();
            echo "<h4>Ataques:</h4>";
            foreach ($p->getAtaques() as $ataque) {
                echo '<p>• ' . $ataque->getNombre() . '</p>';
            }
            echo '</div>';
        }
        echo '</div>';
        echo "<hr>";

        // --- CREAR POKEMON LEGENDARIO ---
        $articuno = new PokemonLegendario(
            "Articuno", 144, "Articuno, Pokémon legendario de hielo y vuelo.",
            [$hielo, $volador = new Tipo("Volador", [], [])], [$ventisca, $rayoHielo, $liofilizacion, $vendaval],
            $gen1, "Islas de hielo", "Evento especial"
        );
        $legendarios = [$articuno];
        echo "<h2>Pokémon Legendarios</h2>";
        echo '<div class="pokemon-grid">';
        foreach ($legendarios as $p) {
            echo '<div class="pokemon-card">';
            $p->mostrarInfo();
            $p->mostrarCategoria();
            echo "<h4>Ataques:</h4>";
            foreach ($p->getAtaques() as $ataque) {
                echo '<p>• ' . $ataque->getNombre() . '</p>';
            }
            echo '</div>';
        }
        echo '</div>';
        echo "<hr>";

        // --- CREAR POKEMON SALVAJE ---
        $pikachu = new PokemonSalvaje(
            "Pikachu", 25, "Pikachu, el Pokémon ratón eléctrico.",
            [$electrico], [$placaje, $rayo], $gen1, "Bosque de Viridian"
        );
        $salvajes = [$pikachu];
        echo "<h2>Pokémon Salvaje</h2>";
        echo '<div class="pokemon-grid">';
        foreach ($salvajes as $p) {
            echo '<div class="pokemon-card">';
            $p->mostrarInfo();
            $p->mostrarCategoria();
            echo "<h4>Ataques:</h4>";
            foreach ($p->getAtaques() as $ataque) {
                echo '<p>• ' . $ataque->getNombre() . '</p>';
            }
            echo '</div>';
        }
        echo '</div>';
        echo "<hr>";


        // --- CREAR USUARIO ---
        $usuario1 = new Usuario(1, "Musta", "musta@pokemon.com", "gengar123");
        echo "<h2>Usuario</h2>";
        echo '<div class="usuario-box">';
        echo "<p><strong>Nombre:</strong> " . $usuario1->getNombreUsuario() . "</p>";
        echo "<p><strong>Email:</strong> " . $usuario1->getEmail() . "</p>";
        echo '</div>';
    ?>
</body>
</html>

