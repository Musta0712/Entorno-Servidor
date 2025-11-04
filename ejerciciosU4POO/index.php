<?php

// 1. Crea la clase Empleade con su nombre, apellidos y sueldo. Para ella:
// - Crea los getters y setters de los atributos.
// - Crea el constructor que reciba nombre, apellidos y, opcionalmente, el sueldo. Si no recibe sueldo, se pondrá el valor -1.
// - Crea el __toString para imprimir por pantalla los objetos de una forma cómoda.
// - Crea el método getNombreCompleto(): string, que devuelve (¡no imprime!) el nombre completo de le empleade (es decir, nombre y apellido)
// - Crea el método llamado pagarImpuestos(): float, que calcule la cantidad de impuestos que debe pagar de IRPF en función de su sueldo. 
// En este enlace puedes consultar los tramos. Recuerda que a cada tramo se le aplica una retención concreta, es decir, si una persona cobra 30.000, 
// a los primeros 12.450 se les aplica un 19%, a los siguientes 7.750 un 24%, etc. Si el sueldo es -1, se devuelve también un -1.
// - En el index, crea varies empleades y prueba que todo funciona bien.

include 'Empleade.php';

$empleade1 = new Empleade("Sara", "Fernández", 120000);
$empleade2 = new Empleade("Adrián", "Mustatea", 48000);
$empleade3 = new Empleade("Marcos", "Gomez");
$empleade4 = new Empleade("Alvaro", "Rodríguez", 30000);

$empleades = [$empleade1, $empleade2, $empleade3, $empleade4];

foreach ($empleades as $empleade) {
    echo "<p>";
    echo $empleade . "<br>";
    $taxes = $empleade->payTaxes();
    //Usamos operadores terniarios
    echo $taxes == -1 ? "➤ No tiene sueldo, por lo tanto no paga impuestos." : "➤ Impuestos a pagar: " . number_format($taxes, 2) . " €";
    echo "</p>";
}

// 2. Añade a la clase Empleade un array telefonos con sus números de teléfono. Añade:
// - El método anadirTelefono(string $telefono): void: añade un teléfono al array.
// - El método listarTelefonos(): string: devuelve un string con todos los números de teléfono separados por comas.
// - El método vaciarTelefonos(): void: elimina todos los teléfonos del array.
// - El método toHtml(): string, que devuelve en un párrafo los datos de le empleade (nombre, apellidos, sueldo e impuestos), 
// y a continuación dentro de una lista desordenada (<ul>) los números de teléfono (si tiene).
