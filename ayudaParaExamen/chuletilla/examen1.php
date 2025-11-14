<?php
echo "<h2>Examen - Figuras, Productos y Cuentas</h2>";

require_once "clases/Circulo.php";
require_once "clases/Rectangulo.php";
require_once "clases/Figura.php";
require_once "clases/Producto.php";
require_once "clases/CuentaBancaria.php";

echo "<h3>Ejercicio 1: Figuras Geométricas</h3>";

$circulo = new Circulo("rojo", 4.5);
$rect1 = new Rectangulo("azul", 5, 10);
$rect2 = new Rectangulo("verde", 2.5, 7);

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Figura</th><th>Color</th><th>Área</th><th>Perímetro</th></tr>";

function filaFigura($fig) {
    echo "<tr>";
    echo "<td>" . get_class($fig) . "</td>";
    echo "<td>" . $fig->getColor() . "</td>";
    echo "<td>" . number_format($fig->area(), 2) . "</td>";
    echo "<td>" . number_format($fig->perimetro(), 2) . "</td>";
    echo "</tr>";
}

filaFigura($circulo);
filaFigura($rect1);
filaFigura($rect2);

echo "</table>";

echo "<h3>Ejercicio 2: Productos</h3>";

$p1 = new Producto("Teclado", 25, 21);
$p2 = new Producto("Ratón", 15, 21);
$p3 = new Producto("Monitor", 150, 21);

$p2->rebajar(15); // rebaja del 15%

echo "<ul>";
echo "<li>$p1</li>";
echo "<li>$p2</li>";
echo "<li>$p3</li>";
echo "</ul>";

echo "<h3>Ejercicio 3: Cuenta Bancaria</h3>";

$cuenta = new CuentaBancaria("Carlos Pérez", 1000);

$cuenta->ingresar(500);
$ret1 = $cuenta->retirar(3000); // no debería poder
$ret2 = $cuenta->retirar(200);  // sí debería

echo "<p>Retirada 3000€: " . ($ret1 ? "OK" : "Saldo insuficiente") . "</p>";
echo "<p>Retirada 200€: " . ($ret2 ? "OK" : "Fallo") . "</p>";

echo "<p>Estado final: $cuenta</p>";