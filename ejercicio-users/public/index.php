<?php
session_start();

//Voy a verificar que ha llegado:
//1. tiene cookie
//2. form-login
//3. form-signup
/*if (isset($_COOKIE["stay-connected"])) {
    //Me quedo
} else if (isset($_SESSION["origin"])) {
    //Me quedo
} else {
    header("Location: form-login.php");
    exit();
}*/
if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))) {
    $_SESSION["error"] = "Te has intentado colar en el index";
    header("Location: form-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/header.php"; ?>
    <main>

        <?php
        
        //DONDE CORRESPONDA: CREAR OBJETO BOOK Y MOSTRARLO (to string)
        // y verificar que todo sigue funcionando
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "create-book") {
            include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/Book.php";
            $b = new Book(
                $_SESSION["isbn"],
                $_SESSION["title"],
                $_SESSION["author"],
                $_SESSION["pages"],
                $_SESSION["type"]
            );
            echo "<p>$b</p>";
        }


        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "signup") {
            //Creo un objeto User
            require_once $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/User.php";
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

        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "login") {
            echo "<p>Te damos la bienvenida, {$_SESSION['email']}</p>";
        }

        // Ver si tiene cookies de permanecer registrado. Coger su nombre
        // Si no tiene cookie pero tiene sesión, recuperar su nombre
        // Si no, a signup.

        ?>

        <?php //include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/book.php"; 
        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php"; ?>
</body>

</html>