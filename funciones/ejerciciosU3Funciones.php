
<h2>1. Realiza la función imprimeMayor. Recibe dos parámetros (números) e imprime por pantalla (echo) el mayor de los dos. No devuelve nada.</h2>

<?php
    function imprimeMayor($x, $y){
        if ($x > $y){
            echo $x;
        } else {
            echo $y;
        }
    }

    imprimeMayor(5,10);
?>

<h2>2. Realiza la función mayor. Recibe dos parámetros (números) y devuelve el mayor de los dos (no lo imprime, lo devuelve).</h2>

<?php
    function mayor($x, $y) {
        if ($x > $y){
            return $x;
        } else {
            return $y;
        }
    }

    $result = mayor (5,10);
    echo $result;
?>

<h2>3. Realiza la función esMayor. Recibe dos parámetros, a y b. Si a>b devuelve true. En caso contrario (a<=b) devuelve false.</h2>

<?php
    function esMayor($a, $b) {
        if ($a > $b) {
            return true;
        } else {
            return false;
        }
    }

    var_dump(esMayor(10,5));
    echo "<br>";
    var_dump(esMayor(5,10));
?>

<h2>4. Realiza la función cuentaCaracteres. Recibe un solo parámetro, un string. Devuelve la longitud de dicho string.</h2>

<?php
    function cuentaCaracteres($string) {
        return strlen($string);
    }

    echo cuentaCaracteres ("Esternocleidomastoideo");
?>

<h2>5. Realiza la función cuentaVocales. Recibe un solo parámetro, un string. Devuelve la cantidad de vocales que tiene dicho string.</h2>

<?php
    function cuentaVocales($string) {
        $string = strtolower($string);
        $vowels = array("a","e","i","o","u");
        $count = 0;

        for($i = 0; $i < strlen($string,); $i++) {
            if (in_array($string[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    echo cuentaVocales ("Cristiano Ronaldo");
?>

<h2>6. Realiza la función aumentaODisminuye. Recibe dos parámetros, un número y un boolean. Si el boolean es true, devuelve número+1. Si es false, devuelve número-1.</h2>

<?php
    function aumentaODisminuye($x, $a) {
        if ($a) {
            return $x+1;
        } else {
            return $x-1;
        }
    }

    echo aumentaODisminuye(10, true);
    echo "<br>";
    echo aumentaODisminuye(10, false);
?>

<h2>7. Realiza la función esPar. Recibe un solo parámetro y devuelve true o false dependiendo de si es par o no.</h2>

<?php
    function esPar($x) {
        return ($x % 2 == 0);
    }

    var_dump(esPar (35));
    echo "<br>";
    var_dump(esPar (20));
?>

<h2>8. Realiza la función arrayAletatorio. Recibe tres parámetros: tamaño, mínimo y máximo. Devolverá un array del tamaño indicado como primer parámetro, rellenado de valores aleatorios entre el mínimo y el máximo indicados.</h2>

<?php
    function arrayAletatorio($size, $min, $max) {
        $result = [];

        for ($i = 0; $i < $size; $i++) {
            $result[] = rand($min , $max);
        }

        return $result;
    }

    var_dump(arrayAletatorio(5, 23, 50));
    var_dump(arrayAletatorio(10, 10, 500));
?>

<h2>9. Realiza la función arrayPares. Recibe un único parámetro, un array con números. Devuelve un array que solamente contiene los valores pares del original.</h2>

<?php
    function arrayPares($array) {
        $result = [];

        foreach ($array as $value) {
            if ($value % 2 === 0) {
                $result[] = $value;
            }
        }
        return $result;
    }

    $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $pares = arrayPares($numbers);
    var_dump(arrayPares($pares));
?>

<h2>10. Realiza la función digitos. Recibe como parámetro un número entero. Devuelve la cantidad de dígitos que tiene.</h2>

<?php
    function digits($x){
        $x = abs($x);
        return strlen((string)$x);
    }

    echo digits(12345);
    echo "<br>";
    echo digits(12345678);
    echo "<br>";
    echo digits(123456789101112);
?>

<?php
?>

<?php
?>

<?php
?>

<?php
?>

<?php
?>