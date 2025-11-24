<?php
    session_start();
    // Si no ha llegado al indexv2 después del formulario de singupv2, que le devuelva a signupv2.php
    var_dump(!isset($_SESSION["origin"]));
    if (!isset($_SESSION["origin"]) or $_SESSION["origin"] != "signup"){
        header("Location: signupv2.php");
        exit(); // 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Bieeen!!!!</p>
    <?php
    require $_SERVER["DOCUMENT_ROOT"] . "/U3formularios/signup/User.php";
        var_dump($_POST);
        var_dump($_GET);
        var_dump($_SESSION);
        echo "<p>El nombre introducido era... </p>";

        // Construir un objeto User y mostrarlo por pantalla

        $u = new User($_SESSION ["name"], $_SESSION ["pass"], $_SESSION ["email"], $_SESSION ["age"], $_SESSION ["studies"]);
        echo $u;
    ?>
</body>
</html>