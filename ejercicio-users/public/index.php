<?php
session_start();
?>
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
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/header.php"; ?>
    <main>

        <?php
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "signup") {
            //Creo un objeto User
            require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/User.php";
            //require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Region.php";
            /*$region = "madrid";
            $u = new User("nombre", "a@a.com", "asdf", constant("Region::$region"));*/
            $region = $_SESSION["region"];
            $u = new User(
                $_SESSION["fullname"],
                $_SESSION["signup-email"],
                "",         //contraseña vacía
                constant("Region::$region")
            );

            //Lo imprimo
            echo "<p>$u</p>";
        }



        // Ver si tiene cookies de permanecer registrado. Coger su nombre
        // Si no tiene cookie pero tiene sesión, recuperar su nombre
        // Si no, a signup.

        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php"; ?>
</body>

</html>