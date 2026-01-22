<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php"; 
require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/funciones.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/PokemonLegendarioDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/PokemonLegendario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Generacion.php";

// 1. Control de acceso
if(!(isset($_COOKIE["stay-connected"]) || isset($_SESSION["origin"]))){
    $_SESSION["error"] = "· El acceso esta restringido. Por favor, inicia sesión para poder pasar. ·";
    header("Location: form-login.php");
    exit();
}

$conexion = CoreDB::getConnection();

// 2. Procesar ACCIONES (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"])) {
    
    // AÑADIR POKÉMON
    if ($_POST["accion"] == "añadir") {
        $nombre = secure($_POST["nombre"]);
        $numero = (int)$_POST["numeroPokedex"];
        $descripcion = secure($_POST["descripcion"]);
        $ubicacion = secure($_POST["ubicacion"]);
        $evento = secure($_POST["evento"]);
        
        // Creamos una generación genérica (o podrías traerla de la DB)
        $generacion = new Generacion(1, "Kanto", "Primera Generación");
        
        // CREAMOS EL OBJETO (Pasamos arrays vacíos para tipos y ataques por ahora)
        $pokemon = new PokemonLegendario($nombre, $numero, $descripcion, [], [], $generacion, $ubicacion, $evento);
            $id = PokemonLegendarioDAO::create($pokemon); // Usar la misma variable

        // GUARDAMOS
        $id = PokemonLegendarioDAO::create($pokemonLegendario);
        
        header("Location: index.php");
        exit();
    }

        // ELIMINAR POKÉMON
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accion"]) && $_POST["accion"] == "eliminar") {
            // Ahora el nombre coincide con el del formulario
            $id_a_borrar = (int) $_POST["id_pokemonLegendario"];
            
            if (PokemonLegendarioDAO::deleteById($id_a_borrar)) {
                // Es MUY importante redirigir aquí para "limpiar" el envío del formulario
                header("Location: index.php?mensaje=eliminado");
                exit();
            }
        }
}

// 3. OBTENER LISTADO
$listado = PokemonLegendarioDAO::findAll(); 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokédex Legendaria</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/header-index.php";?>

    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/UsuarioDAO.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
    ?>

    <main>
        <div class="titulo">
            <h1>Centro de Investigación Pokémon</h1>
            <h2>Registrar Avistamiento Legendario</h2>
        </div>

        <div class="container">
            <form method="POST" action="index.php">
                <input type="hidden" name="accion" value="añadir">
                
                <input type="text" name="nombre" placeholder="Nombre del Pokémon" required>
                <input type="number" name="numeroPokedex" placeholder="Nº Pokedex" required>
                <input type="text" name="ubicacion" placeholder="Ubicación (ej. Islas Espuma)" required>
                <input type="text" name="evento" placeholder="Evento de aparición" required>
                <textarea name="descripcion" placeholder="Descripción del encuentro..." required></textarea>
                
                <button type="submit">Registrar Legendario</button>
            </form>
        </div>

        <hr>

        <div class="titulo">
            <h2>Pokémon Legendarios Avistados</h2>
        </div>

        <div class="container">
            <?php if (!empty($listado)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Ubicación</th>
                            <th>Evento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listado as $p): ?>
                        <tr>
                            <td><?= $p->getNumeroPokedex() ?></td>
                            <td><strong><?= htmlspecialchars($p->getNombre()) ?></strong></td>
                            <td><?= htmlspecialchars($p->getUbicacion()) ?></td>
                            <td><?= htmlspecialchars($p->getEvento()) ?></td>
                            <td>
                                <form method="POST" action="index.php" style="display:inline;">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input type="hidden" name="id_pokemonLegendario" value="<?= $p->getNumeroPokedex() ?>"> 
                                    <button type="submit" onclick="return confirm('¿Eliminar registro?')">Liberar</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Aún no se han descubierto Pokémon legendarios.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/footer.php";?>
    
</body>
</html>