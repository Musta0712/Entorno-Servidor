<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Formulario Receta</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    $email = $_POST['email'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $titulo = $_POST['titulo'] ?? '';
    $tiempo = $_POST['tiempo'] ?? '';
    $select = $_POST['tipo'] ?? '';
    $radio = $_POST['gluten'] ?? '';
    $color = $_POST['color'] ?? '#800080';

    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!$select) $errores['select'] = "Debes seleccionar un tipo";
    if (!$radio) $errores['radio'] = "Debes marcar una opción de gluten";


    if (empty($errores)) {
        include "indexrecipe.php";
        exit;
        }
    }
    ?>

    <form method="POST" action="">
        <label>Email:</label>
        <br>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
        <br><br>


        <label>Nombre:</label>
        <br>
        <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>">
        <br><br>


        <label>Título de la receta:</label>
        <br>
        <input type="text" name="titulo" value="<?= htmlspecialchars($titulo) ?>">
        <br><br>


        <label>Tiempo (minutos):</label>
        <br>
        <input type="number" name="tiempo" value="<?= htmlspecialchars($tiempo) ?>">
        <br><br>


        <label>Tipo de receta:</label><br>
        <select name="tipo" class="<?= isset($errores['select']) ? 'error' : '' ?>">
            <option value="">Seleccione...</option>
            <option value="vegan" <?= $select === 'vegan' ? 'selected' : '' ?>>Vegan</option>
            <option value="vegetariana" <?= $select === 'vegetariana' ? 'selected' : '' ?>>Vegetariana</option>
            <option value="carnivora" <?= $select === 'carnivora' ? 'selected' : '' ?>>Carnívora</option>
        </select>
        <br>
        <?php if(isset($errores['select'])): ?>
            <span class="mensaje-error"><?= $errores['select'] ?></span><br>
        <?php endif; ?><br>

        <label>Gluten:</label>
        <br>
        <input type="radio" name="gluten" value="con" <?= $radio === 'con' ? 'checked' : '' ?>> Con gluten<br>
        <input type="radio" name="gluten" value="sin" <?= $radio === 'sin' ? 'checked' : '' ?>> Sin gluten<br>
        <?php if(isset($errores['radio'])): ?>
            <span class="mensaje-error"><?= $errores['radio'] ?></span><br>
        <?php endif; ?><br>


        <label>Color:</label><br>
        <input type="color" name="color" value="<?= htmlspecialchars($color) ?>"><br><br>


        <button type="submit">Enviar</button>
    </form>


</body>
</html>