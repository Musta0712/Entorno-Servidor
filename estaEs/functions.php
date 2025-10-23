<?php
//Función para hacer la media
function average(...$numbers){
    //Si no hay valores, está vacio
    if (count($numbers) === 0){
        return false;
    } else {
        $addition = 0;
        for ($i = 0; $i < count($numbers); $i++){
            $addition += $numbers[$i];
        }
        $average = $addition / count($numbers);
        return $average;
    }
}

//Función para hacer elevados
function multiply($base, $expo = 3){
    $result = 1;
    //Lo recorremos
    for ($i = 0; $i < $expo; $i++){
        $result *= $base;
    }
    return $result;
}