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
</body>
</html>