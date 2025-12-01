<?php
session_start();

// Veo si he llegado a través del botón submit (es decir, petición POST)
$name = $email = $pass = $pass2 = $comunidad = $conect = "";
$passError = $nameError = $emailError = "";
$errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //1. Recoger datos
    include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/utils/functions.php";
    $name = secure($_POST["fullname"]);
    $email = secure($_POST["signup-email"]);
    $pass = secure($_POST["signup-password"]);
    $pass2 = secure($_POST["confirm-password"]);
    $comunidad = $_POST["region"];

    if (isset($_POST["stay-connected"]))
        $conect = $_POST["stay-connected"];

    //2. Verificaciones
    if (empty($name)) {
        $errors = true;
        $nameError = "Este campo es obligatorio";
    }
    if (empty($email)) {
        $errors = true;
        $emailError = "Este campo es obligatorio";
    }
    if (empty($pass) or $pass != $pass2){
        $errors = true;
        $passError = "Rellena las contraseñas iguales";
    }

    //3. Si todo bien: me voy a index (sesión)
    if(!$errors){
        $_SESSION["fullname"] = $name;
        $_SESSION["signup-email"] = $email;
        //$_SESSION["signup-password"] = $pass;
        //Las contraseñas no se envían
        $_SESSION["region"] = $comunidad;
        //to do stay-connected es movida de cookies
        $_SESSION["origin"] = "signup";
        header("Location: index.php");
    }
    //3. Si no, me quedo mostrando errores y recuperando values


    //to do mostrar errores, poner clases de error (si quiero), etc
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
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/layouts/header.php"; ?>
    <main>
        <!-- incluyo el formulario de signup -->
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/components/signup.php"; ?>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicios-users/resources/views/layouts/footer.php"; ?>
</body>

</html>