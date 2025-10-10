<?php
//Include (equivalente al import de Java, para añadir otros ficheros)
include("./functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    <h1>Funciones</h1>

    <?php
        //Llamo a la función showName;
        showName();

        echo"<br><hr>";

        //Le pueden usar las variables declaradas en el fichero incluido
        var_dump($variable);

        echo"<br><hr>";

        printAddition(7,9);
        $num1 = 3;
        $num2 = 9;
        echo"<br>";
        printAddition($num1, $num2);

        echo"<br><hr>";

        $resultado =  addition(33, 44);
        echo"$resultado";
        echo"<br>";
        echo addition(6,9);

        echo"<br><hr>";

        echo salute("Juan");    //hola juan
        echo"<br>";
        echo salute ("Juan" , "Buenos dias");   //buenos dias juan
        echo"<br><hr>";


        echo intoHtml("prueba", "br");

        echo matricula("juan" ,"Tierno", "DAM" , 2023);
        echo"<br>";
        echo matricula("aLBERTO" ,"Brasil");
        echo"<br>";
        echo matricula("Kelvis" ,"Ciudad de jaen", "Asir");
        echo"<br><hr>";
    ?>

    <h3>Parámetros por valor o referencia</h3>
    <?php

    function increment($number){
        $number++;
        return $number;
    }

    $number = 8;
    increment($number);
    echo "<p>$number</p>";

    //parametros por referencia
    function incrementReference(&$number){
        $number++;
        return $number;
    }

    $number = 8;
    incrementReference($number);
    echo "<p>$number</p>";
    ?>

</body>
</html>