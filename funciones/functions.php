<?php

//función sin argumentos ni valor de retorno

function showName()
{
    echo"Adri";
}

$variable = "hola";

//Imprime la suma de dos números
function printAddition($a, $b)
{
    echo $a + $b;
}

/**
 * Realiza la suma de dos números enteros o double
 * Es una suma...
 * @param int|float $a Primer operando
 * @param int|float $b Segundo operando
 * @return int|float El resultado de la suma de los dos
 */
function addition($a, $b):int|float
{
    return $a + $b;
}

//función para saludar que puede recibir solamente el nombre (muestra "hola $nombre"),
//o el nombre y el tipo de saludo (muestra $saludo $nombre)
//En Java seria asi:
//public static String saludar(Srtring nombre){return saludar "hola"}
//public static String saludar(Srtring nombre, String saludo){return saludo + " " + nombre;}
//Esto en Java se conoce como sobreescritura de funciones. Y en PHP NO EXISTE

//En PHP: parámetros con valores por defecto
function salute($name, $salute = "hola"): string{
    return $salute . " " . $name;
}

/**
 * Devuelve lo que le digamos como parámetro dentro de las etiquetas que indequemos (p si no indicamos nada)
 * @param string $tag etiquetas en las que envolver el elemento, Si no se indica ninguna, que <p>por defecto</p>
 * @param string $element cadena de texto a envolver entre las tags html
 * @return string con el elemento rodeado de las tags indicadas
 */

function intoHtml($element, $tag = "p"){
    return "<$tag>$element</$tag>";
}

//intoHtml("br", "hola") devuelve "<br>hola<br>"
//intoHtml("p", "hola") devuelve "<p>hola</p>"
//intoHtml("book", "hola") devuelve "<book>hola</book>"
//intohtml("hola") devuelve "<p>hola</p>"


/**
 * Summary of matricula
 * @param mixed $student
 * @param mixed $school
 * @param mixed $course
 * @param mixed $year
 * @return string
 */
function matricula($student, $school, $course = "DAW", $year = 2025){
    return "$student matriculado en $course, en $year, en el IES $school";
}
