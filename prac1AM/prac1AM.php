<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica1</title>
</head>
<body>
    <h2>Ejercicio 1: Bucles anidados</h2>
    <h4>Primera figura(rectángulo completo)</h4>
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 6; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
    <h4>Segunda figura(triángulo izquierdo)</h4>
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
    <h4>Tercera figura(marco)</h4>
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
    <h4>Cuarta figura(tablero de ajedrez)</h4>
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
</body>
</html>