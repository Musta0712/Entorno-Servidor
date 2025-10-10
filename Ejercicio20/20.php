<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio20</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo"<table class = table>";
            echo "<tr>";
                echo "<th class = x>X</th>";
                for ($i = 0; $i <= 9; $i++) {
                    echo "<th class = rows>$i</th>";
                }
            echo "</tr>";

                for ($i = 0; $i <= 9; $i++) {
                    echo "<tr>";
                    echo "<th class = columns>$i</th>";
                    for ($j = 0; $j <= 9; $j++) {
                        $mult = $i * $j;
                        echo "<td class = mult>$mult</td>";
                    }
                    echo "</tr>";
                }
        "</table>";
    ?>
</body>
</html>