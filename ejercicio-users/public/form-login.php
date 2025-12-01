<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/layouts/header.php"; ?>
    <main>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/components/login.php"; ?>





        
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/app/models/User.php";

        /* Ejemplo para construir un objeto utilizando el enum: */
        $region = "madrid";
        $u = new User("nombre", "a@a.com", "asdf", constant("Region::$region"));
        echo "$u";
        /* Comenta esta sección de código */
        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/layouts/footer.php"; ?>
</body>

</html>