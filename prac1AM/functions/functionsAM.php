
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

    // Dividimos el texto en palabras usando espacios
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




