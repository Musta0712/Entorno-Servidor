<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulacro</title>
</head>

<body>
    <?php


    /*Crea un objeto de tipo Flor y dos de tipo
    Arbol con los datos que quieras. Haz que una de las flores crezca 1.3cm*/

    require $_SERVER["DOCUMENT_ROOT"] . "/clases/Flower.php";
    require $_SERVER["DOCUMENT_ROOT"] . "/clases/Tree.php";

    $f = new Flower("Orquidea", 22.8, "marzo");
    $f->grow(1.3);
    $a1 = new Tree("Pino", 120, true);
    $a1->grow(1);
    $a2 = new Tree("Roble", 250, false);

    ?>
    <ul>
        <li>
            <?php echo $f; ?>
        </li>
        <li>
            <?php echo $a1; ?>
        </li>
        <li>
            <?php echo $a2; ?>
        </li>
    </ul>
</body>

</html>