<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica1</title>
    <link rel="stylesheet" href="styles/styleAM.css">
</head>
<body>
    <h2>Ejercicio 1: Bucles anidados</h2>
    <h4>Primera figura (rectángulo completo)</h4>
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 6; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
    <h4>Segunda figura (triángulo izquierdo)</h4>
    <?php
        $columns = 1;
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                echo "* ";
            }
            if ($columns < 6) {
                $columns++;
            }
            echo "<br>";
        }
    ?>
    <h4>Tercera figura (marco)</h4>
    <?php
        $rows = 5;
        $cols = 6;

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $cols; $j++) {
                if ($i == 1 || $i == $rows || $j == 1 || $j == $cols) {  // primera fila || última fila || primera columna || última columna
                    echo "* ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    <h4>Cuarta figura (tablero de ajedrez)</h4>
    <?php
        $rows = 5;
        $cols = 6;

        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $cols; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "* ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
    <h2 class = title >Ejercicio 2: Arrays bidimensionales</h2>
    <?php
        $temperatures = [];

        for ($i = 0; $i < 6; $i++) {
            $cityTemps = [];
            for ($j = 0; $j < 6; $j++) {
                $cityTemps[] = rand(-10, 45);
            }
            $temperatures[] = $cityTemps;
        }

        echo "<table border='1'>";
        echo "<tr>
                <th>Ciudad/Dia </th>
                <th>Dia 1</th>
                <th>Dia 2</th>
                <th>Dia 3</th>
                <th>Dia 4</th>
                <th>Dia 5</th>
                <th>Dia 6</th>
            </tr>";
        for ($i = 0; $i < 6; $i++) {
            echo "<tr>";
            echo "<td>Ciudad " . ($i + 1) . "</td>";
            for ($j = 0; $j < 6; $j++) {
                $temp = $temperatures[$i][$j];
                echo "<td>" . $temp . "ºC </td>";
            }
        }
        echo "</table>";

        $minTemp = 45;
        $maxTemp = -10;
        $dayGreatestVariation = 0;
        $greaterVariation = 0;
        $tempMediaCity = array_fill(0, 6, 0);

        for ($i = 0; $i < 6; $i++) {

            $tempMinDay = 45;
            $tempMaxDay = -10;

            for ($j = 0; $j < 6; $j++) {

                $temp = $temperatures[$i][$j];

                if ($temp < $minTemp) {
                    $minTemp = $temp;
                }
                if ($temp > $maxTemp) {
                    $maxTemp = $temp;
                }

                if ($temp < $tempMinDay) {
                    $tempMinDay = $temp;
                }
                if ($temp > $tempMaxDay) {
                    $tempMaxDay = $temp;
                }

                $tempMediaCity[$j] += $temp;
            }

            $variationDay = $tempMaxDay - $tempMinDay;

            if ($variationDay > $greaterVariation) {
                $greaterVariation = $variationDay;
                $dayGreatestVariation = $i + 1;
            }

        }

        echo "<p>La temperatura más baja es: " . $minTemp . "ºC </p>";
        echo "<p>La temperatura más alta: " . $maxTemp . "ºC </p>";
        echo "<p>El dia con mayor variación térmica: Dia " . $dayGreatestVariation . " (Variación: " . $greaterVariation . "ºC) </p>";

        echo "<h4>Temperatura media por ciudad:</h4>";
        for ($j = 0; $j < 6; $j++) {
            $average = $tempMediaCity[$j] / 6;
            echo "<p>Ciudad " . ($j + 1) . ": " . round($average, 2) . "ºC </p>";
        }
    ?>

    <h2>Ejercicio 3.1: filterByType Recibe dos parámetros: un array y un tipo ("par", "impar", "primo",
    "positivo", "negativo"). Devuelve un array con los elementos que cumplen la condición.</h2>

    <?php

    include 'functions/functionsAM.php';

    $numbers = [1, 2, 3, 4, 5, -1, -2, -3, 0];
    print_r(filterByType($numbers, 'par'));     
    print_r(filterByType($numbers, 'impar'));   
    print_r(filterByType($numbers, 'primo'));    
    print_r(filterByType($numbers, 'positivo')); 
    print_r(filterByType($numbers, 'negativo'));

    ?>

    <h2>Ejercicio 3.2: calculateStatistics: Recibe un array de números. Devuelve un array asociativo con
    las claves media, mediana y moda, y los valores correspondientes a esos cálculos.</h2>

    <?php

    $numbers = [1, 2, 2, 3, 4, 4, 5, 8];  // aqui hay dos modas (2 y 4)
    print_r(calculateStatistics($numbers));

    ?>

    <h2>Ejercicio 3.3: analizarPalabras: Recibe un texto y devuelve un array asociativo con las claves
    number_of_words, longest_word, shortest_word.</h2>

    <?php

    $text = "El músculo con el nombre más largo es el esternocleidomastoideo";
    $result = analizarPalabras($text);
    print_r($result);

    ?>

    <h2>Ejercicio 3.4: convertTemperature: Recibe tres parámetros: una temperatura, la unidad de origen,
    la unidad de destino ("celsius", "fahrenheit", "kelvin"). Devuelve la temperatura
    convertida (o false si se escogió una unidad que no existe). En caso de no indicar
    unidades, se considerará por defecto que la de origen es celsius y la de destino es
    fahrenheit.</h2>

    <?php
    echo convertTemperature(0, "celsius", "kelvin");  // 273.15
    echo "<br>";
    echo convertTemperature(32, "fahrenheit", "celsius"); // 0
    echo "<br>";
    echo convertTemperature(300, "kelvin", "fahrenheit"); // 80.33
    echo "<br>";
    echo convertTemperature(25); // 77 (celsius a fahrenheit por defecto)
    ?>

    <h2>Ejercicio 3.5: Inventa una función que reciba dos parámetros, uno de tipo simple (int, boolean,
    float, string…) y otro que sea un array asociativo. La función no imprime nada, solo
    devuelve valores. Inventa el funcionamiento de dicha función para que tenga
    sentido. Explica lo que hace, qué significan los parámetros y qué valor devuelve, en
    un comentario justo antes de la declaración de la función(PHP doc).</h2>

    <?php
    $datos = [
    "manzana" => 10,
    "pera" => 5,
    "naranja" => 8
    ];

    echo procesarDatos("pera", $datos); // Devuelve 5 * 2 = 10
    echo "<br>";
    echo procesarDatos("manzana", $datos); // Devuelve 10 * 2 = 20
    echo "<br>";
    echo procesarDatos("platano", $datos); // Devuelve 10 + 5 + 8 = 23, porque no esta "platano".
    ?>

    <h2>Ejercicio 4. Arrays asociativos</h2>

    <?php

    include 'functions/shopAM.php';

    // Ejemplo con el primer producto
    echo "Precio" . formatPrice($productos['prod1']['precio']); // Muestra "899,99 €"
    echo "<br>";
    echo "IVA" . formatPrice($productos['prod1']['precio'] * 0.21); // Muestra "188,99 €"
    echo "<br>";
    echo "Precio con IVA" . formatPrice(calculateIVA($productos['prod1']['precio'])); // Muestra "1088,98 €"
    echo "<br>";
    // echo "Stock" . getStock($productos['prod1']); // No me funciona bien, luego lo miro

    ?>

    <?php

// Mostrar tabla HTML
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Producto</th><th>Precio</th><th>Stock</th><th>Categoría</th></tr>";

foreach ($productosConDescuento as $prod) {
    echo "<tr>";
    echo "<td>{$prod['nombre']}</td>";
    echo "<td>";
    // He puesto el style directamente aqui porque no me funcionaba bien si lo hacia de la otra manera
    if (isset($prod['descuento'])) {
        $precioDesc = precioConDescuento($prod['precio'], $prod['descuento']);
        echo "<span style='text-decoration: line-through; color: red;'>" . formatPrice($prod['precio']) . "</span> ";
        echo "<span>" . formatPrice($precioDesc) . "</span>";
    } else {
        echo formatPrice($prod['precio']);
    }
    echo "</td>";
    echo "<td>{$prod['stock']}</td>";
    echo "<td>{$prod['categoria']}</td>";
    echo "</tr>";
}

    echo "</table>";
?>

</body>
</html>