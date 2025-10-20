
<?php
function filterByType($array, $type) {
    $result = [];
    foreach ($array as $value) {
        if ($type == "par") {
            if ($value % 2 == 0) {
                $result[] = $value;
            }
        } elseif ($type == "impar") {
            if ($value % 2 != 0) {
                $result[] = $value;
            }
        } elseif ($type == "primo") {
            if (isPrime($value)) {
                $result[] = $value;
            }
        } elseif ($type == "positivo") {
            if ($value > 0) {
                $result[] = $value;
            }
        } elseif ($type == "negativo") {
            if ($value < 0) {
                $result[] = $value;
            }
        }
    }
    return $result;
}

function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
?>
<?php
function calculateStatistics($array) {

    $statistics = [];
    $count = count($array);

    sort($array);

    $statistics['media'] = array_sum($array) / $count;

    $statistics['mediana'] = ($count % 2 == 0) ? // usamos operadores ternarios
        ($array[$count / 2 - 1] + $array[$count / 2]) / 2 : 

    $array[floor($count / 2)];

    $valuesCount = array_count_values($array);

    $maxCount = max($valuesCount);

    $modes = array_keys($valuesCount, $maxCount);

    $statistics['moda'] = (count($modes) == $count) ? null : $modes;

    return $statistics;
}
?>

<?php
function analizarPalabras($text) {

    // Dividimos el texto en palabras usando los espacios
    $words = explode(' ', trim($text));
    
    // Contamos cuántas palabras hay en el
    $number_of_words = count($words);
    
    // Inicializamos variables para la palabra más larga y la más corta
    $longest_word = '';
    $shortest_word = $words[0] ?? '';
    
    // Recorremos todas las palabras
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
        if (strlen($word) < strlen($shortest_word)) {
            $shortest_word = $word;
        }
    }
    
    // Devolvemos el resultado en un array asociativo
    return [
        'number_of_words' => $number_of_words,
        'longest_word' => $longest_word,
        'shortest_word' => $shortest_word
    ];
}

?>

<?php
function convertTemperature($temp, $from = "celsius", $to = "fahrenheit") {

    $from = strtolower($from);
    $to = strtolower($to);

    $valid = ["celsius", "fahrenheit", "kelvin"];
    if (!in_array($from, $valid) || !in_array($to, $valid)) {
        return false;
    }

    if ($from === $to) {
        return $temp;
    }

    // Funciones para convertir de una unidad a otra directamente
    $conversions = [
        "celsius" => [
            "fahrenheit" => fn($t) => $t * 9 / 5 + 32,
            "kelvin" => fn($t) => $t + 273.15,
        ],
        "fahrenheit" => [
            "celsius" => fn($t) => ($t - 32) * 5 / 9,
            "kelvin" => fn($t) => ($t - 32) * 5 / 9 + 273.15,
        ],
        "kelvin" => [
            "celsius" => fn($t) => $t - 273.15,
            "fahrenheit" => fn($t) => ($t - 273.15) * 9 / 5 + 32,
        ]
    ];

    return $conversions[$from][$to]($temp);
}

?>

<?php

/**
 * Esta función recibe una clave simple y un array asociativo con valores numéricos.
 * Si la clave existe en el array, devuelve el valor asociado multiplicado por 2.
 * Si la clave no existe, devuelve la suma de todos los valores del array.
 * 
 * Parameters:
 * - $key: un valor simple (int, string) que representa la clave a buscar en el array.
 * - $assocArray: un array asociativo cuyos valores son numéricos.
 * 
 * Returns:
 * - Si la clave existe, devuelve el valor asociado multiplicado por 2 
 * - Si la clave no existe, devuelve la suma de todos los valores del array 
 * @param mixed $key
 * @param array $assocArray
 * @return float|int
 */
function procesarDatos($key, array $assocArray) {
    if (array_key_exists($key, $assocArray)) {
        return $assocArray[$key] * 2;
    } else {
        return array_sum($assocArray);
    }
}
?>

<?php
/**
 * Formatear un precio decimal a formato "899,99 €"
 * @param float $precio
 * @return string
 */
function formatPrice(float $precio): string {
    return number_format($precio, 2, ',', '') . ' €';
}

?>

<?php
/**
 * Calcular el precio con IVA aplicado
 * @param float $precio
 * @param float $iva
 * @return float|int
 */
function calculateIVA(float $precio, float $iva = 21.0): float {
    return $precio * (1 + $iva / 100);
}
?>

<?php
/**
 * Devolver el array con productos que tienen stock > 0
 * @param array $productos
 * @return array
 */
function getStock(array $productos): array {
    return array_filter($productos, function($producto) {
        return $producto['stock'] > 0;
    });
}
?>

<?php

/**
 * Summary of precioConDescuento
 * @param float $precio
 * @param float $descuento
 * @return float|int
 */
function precioConDescuento(float $precio, float $descuento): float {
    return $precio * (1 - $descuento / 100);
}
?>





