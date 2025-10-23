<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de PHP</title>
</head>
<body>
    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);

        // es de tipo bool
        $underAge = true;
        $type = gettype($underAge); // devuelve un String con el tipo de la variable
        echo $type;
        echo "<br>";
        echo "<br>";

        // es de tipo int
        $number = 14;
        echo gettype ($number);
        echo "<br>";
        echo "<br>";

        // es de tipo float
        $decimal = 14.1;
        var_dump($decimal); // imprime por pantalla el tipo y el valor
        echo "<br>";
        echo "<br>";

        // es de tipo string
        $text = "esto es una cadena de texto";
        // concatener es el operador .
        $text = $text ." - fin";
        var_dump( $text);
        echo "<br>";
        echo "<br>";

        $a; // variable no inicianlizada
        var_dump($a);
        echo "<br>";
        echo "<br>";

        // Constantes
        const GROUP = "2DAW";
        //echo "El grupo es GROUP"; ESTAS DOS NO FUNCIONAN
        //echo "El grupo es $GROUP"; ESTAS DOS NO FUNCIONAN
        echo "El grupo es " . GROUP;
        echo "<br>";
        echo "<br>";

        // Operadores
        $mod = 7 % 5;
        var_dump($mod); // te da el resto
        echo "<br>";
        echo "<br>";

        $pow = 4 ** 3;
        var_dump($pow);
        echo "<br>";
        echo "<br>";

        $a = 4;
        $a++; // incrementa en 1
        var_dump($a);
        ++$a; // incrementa en 1
        var_dump($a);
        echo "<br>";
        echo "<br>";

        $x = 5;
        $y = $x++;  // se lee de izquierda a derecha primero asignas la y luego los ++
        echo "y=$y";
        echo "<br>";
        echo "x=$x";
        echo "<br>";

        $age = 9;
        echo "La edad de esa persona es " . ++$age. "<br>"; // de las pocas veces que se utiliza los dos mas delante
        echo "<br>";

        $a = 4;
        // $a = $a + 9;
        $a += 9;  // esto equivale a $a = $a + 9;
        $a /= 24; // esto equivale a $a = $a / 24;

        $text = "hola";
        $text .= " y adios"; // esto equivale a $text = $text . "y adios";

        var_dump( $text);
        echo "<br>";
        echo "<br>";

        var_dump($a);
        echo "<br>";
        echo "<br>";

        // Operadores de comparación
        $a = 4;
        $b = 4;
        $comp = $a == $b;
        var_dump($comp); // true
        echo "<br>";
        echo "<br>";

        $comp = $a > $b;
        var_dump($comp); // false
        echo "<br>";
        echo "<br>";

        $comp = $a >= $b;
        var_dump($comp); // true
        echo "<br>";
        echo "<br>";

        $comp = $a != $b; // distinto
        var_dump($comp); //false
        echo "<br>";
        echo "<br>";

        echo "<p>Nave espacial</p>";
        $a = 2;
        $com = $a <=> $b;
        var_dump($com);


    ?>
</body>
</html>