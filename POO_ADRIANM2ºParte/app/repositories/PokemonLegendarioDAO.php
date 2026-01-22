<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pokemon.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/PokemonLegendario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Generacion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class PokemonLegendarioDAO {

    public static function create(PokemonLegendario $pokemon) {
        $conn = CoreDB::getConnection(); 
        // Añadimos las columnas de generación al INSERT
        $sql = "INSERT INTO pokemons_legendarios (nombre, numero_pokedex, descripcion, ubicacion, evento, gen_numero, gen_region, gen_nombre) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $ps = $conn->prepare($sql);
        
        $nombre = $pokemon->getNombre();
        $numero = $pokemon->getNumeroPokedex();
        $desc = $pokemon->getDescripcion();
        $ubicacion = $pokemon->getUbicacion();
        $evento = $pokemon->getEvento();
        
        // Extraemos los datos del objeto Generación que tiene el Pokémon
        $gen = $pokemon->getGeneracion(); 
        $gen_num = $gen->getNumero();
        $gen_reg = $gen->getRegion();
        $gen_nom = $gen->getNombre();

        // Actualizamos el bind_param (8 parámetros: sisssiss)
        $ps->bind_param("sisssiss", $nombre, $numero, $desc, $ubicacion, $evento, $gen_num, $gen_reg, $gen_nom);
        $ps->execute();
        $id = $conn->insert_id;
        
        $conn->close();
        return $id;
    }

    public static function deleteById(int $id): bool {
        $conn = CoreDB::getConnection();
        $sql = "DELETE FROM pokemons_legendarios WHERE id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("i", $id);
        $ps->execute();

        $result = $ps->affected_rows > 0;
        $conn->close();
        return $result;
    }

    public static function findAll(): array {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM pokemons_legendarios";
        $result = $conn->query($sql);

        $listado = [];
        while ($row = $result->fetch_assoc()) {
            $generacionObj = new Generacion(
                (int)$row["gen_numero"], 
                $row["gen_region"],      
                $row["gen_nombre"]       
            );

            $listado[] = new PokemonLegendario(
                $row["nombre"],
                (int)$row["numero_pokedex"],
                $row["descripcion"],
                [], 
                [], 
                $generacionObj, 
                $row["ubicacion"],
                $row["evento"]
            );
        }

        $conn->close();
        return $listado;
    }
}