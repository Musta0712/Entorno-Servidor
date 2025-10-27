<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
</head>
<body>
    <?php
    //include "./Sport.php";
    //Construyo un objeto de la clase Sport:
    //$s1 = new Sport("equipo", true, 5); // No se peude porque es abstracta.

    //Objeto Rugby:
    include $_SERVER["DOCUMENT_ROOT"] . "/PHPU2/sports/Rugby.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/PHPU2/sports/Tennis.php";
    $r1 = new Rugby("Los Pumas", "equipo", true, 15);
    //Puedo llamar a los métodos de la superclase:
    $r1->addPlayer(2); //Suma dos a los jugadores
    echo "<p>$r1</p>";
    ?>
</body>
</html>