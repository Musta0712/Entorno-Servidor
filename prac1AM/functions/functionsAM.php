<h2>Ejercicio 1: filterByType Recibe dos parámetros: un array y un tipo ("par", "impar", "primo",
"positivo", "negativo"). Devuelve un array con los elementos que cumplen la
condición.</h2>
<?php
function filterByType($array, $type) {
    $result = [];
    foreach ($array as $value) {
        switch ($type) {
            case "par":
                if ($value % 2 == 0) {  
                    $result[] = $value;
                }
                break;
            case "impar":
                if ($value % 2 != 0) {  
                    $result[] = $value;
                }
                break;
            case "primo":
                if (isPrime($value)) {  
                    $result[] = $value;
                }
                break;
            case "positivo":
                if ($value > 0) {  
                    $result[] = $value;
                }
                break;
            case "negativo":
                if ($value < 0) {  
                    $result[] = $value;
                }
                break;
        }
    }
    return $result;
}
?>
