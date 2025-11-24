<?php
session_start();


$name = $email = $pass = $pass2 = "";
$age = 0;
$studies = [];
$errors = false;
$passError = " ";

function secure($text){
    /*
    // Quitar espacios de delante y detras
    $text = trim($text);
    // Escapar carácteres especiales
    $text = stripslashes($text);
    // Carácteres especiales de HTML
    $text = htmlspecialchars($text);*/

    $text = htmlspecialchars(stripslashes(trim($text)));
    return $text;
}


// Hago las comprobaciones del formulario:
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Solo se va a meter en este if si llega con una petición POST,
    // es decr, después de hacer click en el botñon del formulario post
    // echo "hola";

    $name = secure ($_POST["name"]);
    $email = secure ($_POST["email"]);
    $pass = secure ($_POST["pass"]);
    $pass2 = secure ($_POST["pass2"]);
    $email = secure ($_POST["email"]);
    $age = secure ($_POST["age"]);
    if (isset($_POST["studies"])) {
        $studies = ($_POST["studies"]);
    }

    if ($pass != $pass2) {
        // Hay errores, muestro el formulario (sigo aqui)
        $errors = true;
        $passError = "Las contraseñas no coinciden";
    } else {
        //Guardo el la sesión los datos que quiero pasar:
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["pass"] = $pass;
        $_SESSION["age"] = $age;
        $_SESSION["studies"] = $studies;
        //Le puedo meter otra información
        $_SESSION["origin"] = "signup";
        // Me voy al index:
        header("Location: indexv2.php");
        exit(); // Con esto termina el script, no se ejecuta nada más.
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        .error{
            color: red;
            font-size: 0.5em;
        }
    </style>
</head>
<body>
    <p>Formulario de registro. Al pulsar el botón enviar, se va al index.</p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Nombre:</label>
        <input type="text" placeholder="Nombre..." name="name" id="name" value="<?= $name ?>"><br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $email ?>"><br>
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" minlength="3">
        <br>
        <label for="pass2"> Repite la contraseña:</label>
        <input type="password" name="pass2" id="pass2" minlength="3">
        <p class="error"><?=$passError?></p>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="age" id="age" value="<?= $age ?>"><br>
        <br>

        <p>Cursos</p>
        <ul>
            <li>
                <input type="checkbox" id="daw" name="studies[]" value="daw"
                    <?php
                    if(in_array("daw", $studies)){
                        echo "checked";
                    }
                    ?>
                >
                <label for="daw">DAW (Desarrollo de Aplicaciones Web)</label>
            </li>
            <li>
                <input type="checkbox" id="dam" name="studies[]" value="dam"
                     <?= in_array("dam", $studies) ? "checked" : ""?>
                >
                <label for="dam">DAM (Desarrollo de Aplicaciones Multiplataformas)</label>
            </li>
            <li>
                <input type="checkbox" id="asir" name="studies[]" value="asir"
                    <?= in_array("asir", $studies) ? "checked" : ""?>
                >
                <label for="asir">ASIR (Administración de Sistemas Informáticos en Red)</label>
            </li>
        </ul>
        <br>
        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>