<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Receta enviada</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<div class = "container">
    <h1>Resumen de la receta enviada</h1>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

        <p>Email: <?= htmlspecialchars($_POST['email']) ?></p>
        <p>Nombre: <?= htmlspecialchars($_POST['nombre']) ?></p>
        <p>Título: <?= htmlspecialchars($_POST['titulo']) ?></p>
        <p>Tiempo: <?= htmlspecialchars($_POST['tiempo']) ?> min</p>
        <p>Tipo: <?= htmlspecialchars($_POST['tipo']) ?></p>
        <p>Gluten: <?= htmlspecialchars($_POST['gluten']) ?></p>
        <p>Color: <?= htmlspecialchars($_POST['color']) ?></p>

    <?php else: ?>
    <p>No has enviado ningún formulario.</p>
    <?php endif; ?>
    
</div>
</body>
</html>