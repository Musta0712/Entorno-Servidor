<?php
session_start();

$name = $pass = $type = "";
$mailError = $passError = $typeError = "";
$errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Ha llegado después de ahcer click en Submit
    //1. Recojo datos securizados
    include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/utils/functions.php";
    $mail = secure($_POST["email"]);
    //TO DO lo del nombre de usuario / email
    $pass = secure($_POST["password"]);
    if(!isset($_POST["login-type"])){
        $errors = true;
        $typeError = "Tienes que seleccionar un método";
    } else {
        $type = secure($_POST["login-type"]);
    }

    //2. Verifico
    if (strlen($name) < 3){
        $nameError = "ERROR!!!!";
        $errors = true;
    }

    if (strlen($pass) < 3){
        $passError = "ERROR!!!!";
        $errors = true;
    }
    //TO DO en algún momento verificamos con la BD
    //que existe ese usuario y contraseña

    //3, Ne voy o muestro errores
    
}

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

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/components/login.php"; ?>





        
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/User.php";

        /* Ejemplo para construir un objeto utilizando el enum: */
        $region = "madrid";
        $u = new User("nombre", "a@a.com", "asdf", constant("Region::$region"));
        echo "$u";
        /* Comenta esta sección de código */
        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php"; ?>
</body>

</html>