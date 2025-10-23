<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer programa en PHP</title>
</head>
<body>
    <h2>PHP:</h2>

    <!-- Comentario HTML -->

    <?php
        /*Esto es un comentario 
        de varias líneas
        */

        //Esto es un comentario de una línea

        #Esto también es un comentario de una línea

        echo "Hola mundo";  //Se puede poner parentesis pero no hace falta

        // Variables;
        // En Java sería : String name = "Adri";
        $name = "Adri"; //El simbolo del dollar significa que lo siguiente es una variable
        echo "<br>";
        echo $name;

        //No es necesario las variables de las comillas DOBLES
        echo "<p> Hola, me llamo $name</p>";
        echo '<p> Hola, me llamo $name</p>';
        
        //Los tipos de las variables pueden cambiar con una nueva asignación
        $name = 3;
        echo "<p> Hola, me llamo $name</p>";
    ?>

    <h2>Más PHP:</h2>
    <?php
        echo "<p>La variable name tiene: $name</p>";
        echo "<h3>Otro título</h3>";
    ?>

    <?php

    //16/9/25
        echo("hola esto es un mensaje.");
        echo "<br>";
        echo "otra cosa generada con PHP";

        // En java: double number = 12.7;
        $number = 12.7;
        echo "<p>La variable es: $number</p>";

        $number = "hola";
        echo "<p>La variable es: $number</p>";

        //$number = $number + 3;
        //echo "<p>La variable es: $number</p>"; No se puede porque daria hola3

    ?>

</body>
</html>