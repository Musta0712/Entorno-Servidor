<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario</title>
</head>
<body>
    <p>Estoy en la landing page:</p>
    <?php

    //var_dump($_SERVER);

    var_dump($_GET);
    var_dump($_POST);

    ?>
    <!-- este if empieza aqui -->
    <?php if ($_SERVER['REQUEST_METHOD'] == "GET"){ ?>
        <p>He llegado a través de una petición GET</p>
        <p>El nombre es: <?php echo $_GET["name"] ?></p>
        <p>La contraseña es: <?= $_GET["pass"] ?></p>  <!--El igual es para abreviar el echo en php -->
    <?php } ?>
    <!-- y termina aqui. Es un if de php embebido entre HTML -->

    <!-- este if empieza aqui -->
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
        <p>He llegado a través de una petición POST</p>
        <p>El nombre es: <?php echo $_POST["name"] ?></p>
        <p>La contraseña es: <?= $_POST["pass"] ?></p>  <!--El igual es para abreviar el echo en php -->
        <!-- Antes de acceder a $_POST["gender"] tengo que ver si existe: isset -->
        <?php if (isset($_POST["gender"])): ?>
            <p>Tú género es: <?= $_POST["gender"] ?></p>
        <?php else: ?>
            <p>No has elegido ningún género</p>
        <?php endif ?>
    <?php endif ?>
    <!-- y termina aqui. Es un if de php embebido entre HTML -->

</body>
</html>