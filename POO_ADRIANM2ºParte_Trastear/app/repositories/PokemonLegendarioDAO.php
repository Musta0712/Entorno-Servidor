<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pokemon.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/PokemonLegendario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Generacion.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class PokemonLegendarioDAO {

    public static function create(PokemonLegendario $pokemon) {
        $conn = CoreDB::getConnection(); 
        $sql = "INSERT INTO pokemons_legendarios (nombre, numero_pokedex, descripcion, ubicacion, evento) VALUES (?, ?, ?, ?, ?)";
        $ps = $conn->prepare($sql);
        
        $nombre = $pokemon->getNombre();
        $numero = $pokemon->getNumeroPokedex();
        $desc = $pokemon->getDescripcion();
        $ubicacion = $pokemon->getUbicacion();
        $evento = $pokemon->getEvento();

        $ps->bind_param("sisss", $nombre, $numero, $desc, $ubicacion, $evento);
        $ps->execute();
        $id = $conn->insert_id;
        
        $ps->close();
        $conn->close();
        return $id;
    }

    public static function deleteById(int $id): bool {
        $conn = CoreDB::getConnection();
        // Asegúrate de que 'id' es el nombre correcto de la columna en tu tabla SQL
        $sql = "DELETE FROM pokemons_legendarios WHERE numero_pokedex = ?"; 
        $ps = $conn->prepare($sql);
        $ps->bind_param("i", $id);
        $exito = $ps->execute();
        $ps->close();
        $conn->close();
        return $exito;
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