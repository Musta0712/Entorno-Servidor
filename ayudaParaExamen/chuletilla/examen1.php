<?php
echo "<h2>Examen - Figuras, Productos y Cuentas</h2>";

// Ejercicio 1 – Figuras geométricas (Herencia + Métodos de cálculo)

// Crea una clase abstracta Figura con:

// Atributo color (string)

// Constructor

// Getters

// El método abstracto area() : float

// El método abstracto perimetro() : float

// Método __toString() que muestre el color.

// Crea dos clases que hereden de ella:


// Clase Circulo

// Atributos:

// radio (float)

// Métodos:

// área = π * radio²

// perímetro = 2 * π * radio



// Clase Rectangulo

// Atributos:

// ancho (float)

// alto (float)

// Métodos:

// área = ancho * alto

// perímetro = 2*(ancho + alto)


// En el archivo main (examen1.php):

// Crea un círculo y dos rectángulos

// Muestra sus áreas y perímetros

// Imprime todo dentro de una tabla HTML:

// | Figura | Color | Área | Perímetro |


// Ejercicio 2 – Gestión de Productos (POO + cálculos)

// Crea una clase Producto con:

// Atributos:

// nombre (string)

// precio (float)

// iva (float) → % IVA (por ejemplo, 21)

// Métodos:

// precioConIVA(): float → precio + (precio * iva/100)

// rebajar(float $porcentaje): void → disminuye el precio n%

// __toString()

// En examen1.php:

// Crea 3 productos

// Rebaja uno de ellos un 15%

// Muestra una lista <ul> con:


// Ejercicio 3 – Cuenta bancaria (Cálculo + Validación)

// Crea la clase CuentaBancaria con:

// Atributos:

// titular (string)

// saldo (float)

// Métodos:

// ingresar(float $cantidad)

// retirar(float $cantidad) : bool → solo retira si hay saldo

// obtenerSaldo()

// __toString()

// En examen1.php:

// Crea una cuenta con saldo inicial

// Ingresa 500€

// Intenta retirar 3000€ (debe fallar)

// Retira 200€ correctamente

// Muestra resultado final en pantalla


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