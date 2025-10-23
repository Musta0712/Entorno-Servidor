<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios para el examen</title>
</head>
<body>
    <h2>Ejercicio 1: Haz una funcion que reciba dos números, y devuelva true si son mutiplos o false si no lo son. 
        Y que devuelva null si uno de los dos es negativo</h2>
    <?php
        function multiple($a, $b) {
            if ($a < 0 || $b < 0) {
                return null;
            }

            if ($a % $b == 0 || $b % $a == 0) {
                return true;
            } else {
                return false;
            }
        }
        // Ejemplos de uso
        var_dump(multiple(10, 2)); // true
        echo "<br>";
        var_dump(multiple(20,12)); // false
        echo "<br>";
        var_dump(multiple(-2, 10)); // NULL
    ?>
</body>
</html>