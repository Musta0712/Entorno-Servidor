<?php
session_start();

//Le echo si no está registrado:
if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))){
    $_SESSION["error"]= "Te has intentado colar en el index";
    header("Location: form-login.php");
    exit();
}

//1. ver si llego por post (formulario)
$isbn = $title = $author = "";
$type = [];
$pages = 0;
$isbnError = $titleError = $authorError = "";
$errors = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //2. recojo valores securizados
    include $_SERVER["DOCUMENT_ROOT"] . "/utils/functions.php";
    $isbn = secure($_POST["isbn"]);
    $title = secure($_POST["title"]);
    $author = secure($_POST["author"]);
    $pages = secure($_POST["pages"]); //SI el user no rellena el input: $_POST["pages"] = ""

    //$pages tiene que se un int, pero al hacer secure($_POST["pages"]) 
    //si está vacío lo convierte a string vacío "".
    if (empty($pages))
        $pages = 0;
    if (isset($_POST["type"])){
        $type = $_POST["type"];
    }
    //3. compruebo errores
    if (strlen($isbn) == 0) {
        $isbnError = "Campo obligatorio";
        $errors = true;
    }
    if (strlen($title) == 0) {
        $titleError = "Campo obligatorio";
        $errors = true;
    }
    if (strlen($author) == 0){
        $authorError = "Campo obligatorio";
        $errors = true;
    }

    if (!$errors){
        $_SESSION["isbn"] = $isbn;
        $_SESSION["title"] = $title;
        $_SESSION["author"] = $author;
        $_SESSION["pages"] = $pages;
        $_SESSION["type"] = $type;
        $_SESSION["origin"] = "create-book";
        header("Location: index.php");
        exit();
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea un libro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php"; ?>
    <main>

        <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/book.php"; ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php"; ?>

</body>

</html>