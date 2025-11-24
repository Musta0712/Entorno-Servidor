<?php
$name = $pass = $terms = "";
$termsError = "";
$errores = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include $_SERVER["DOCUMENT_ROOT"] . "/U3formularios/utils.php";
    $name = secure($_POST["name"]);
    $pass = secure($_POST["pass"]);

    //var_dump($_POST);
    if (isset($_POST["terms"])) {
        $terms = $_POST["terms"];
    } else {
        $errores = true;
        $termsError = "Es obligatorio aceptar los términos";
    }

    if (strlen($name) < 3 || strlen($name) > 15) {
        $nameError = "La longitud entre 3 y 15";
        $errors = true;
    }
    //Si está todo bien: a index,
    //si no, me quedo.
    if (!$errores){
        //TO DO sesión y a index
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../formularios.css" rel="stylesheet">
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="name">Nombre:</label>
         <input type="text" placeholder="Nombre..." name="name" id="name" minlength="3" maxlength="15" value="<?= $name ?>">
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" >
        <br>
        <input type="checkbox" name="terms" id="terms" value="t" 
            class="<?= empty($termsError) ? "" : "checkError" ?>">
        <label for="terms">Acepto los términos</label>
        <?= "<p class='error'> " . $termsError . "</p>" ?>
        
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>

</html>