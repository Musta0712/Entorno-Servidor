<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <?php
        // 1. Declara una variable de cada tipo (int, double, string y boolean) e imprime por pantalla sus valores y sus tipos (utiliza la función gettype para ello)
        // Que salga en un formato HTML correcto y legible por personas, algo como "La variable es de tipo integer y tiene valor 5".
        
        $typeInt = 21;
        $typeDouble = 15.8;
        $typeString = "Hola";
        $typeBol = true;

        echo "La variable es de tipo int" . gettype($typeInt). "y tiene valor $typeInt";
        echo "<br>";
        echo "La variable es de tipo double" . gettype($typeDouble). "y tiene valor $typeDouble";
        echo "<br>";
        echo "La variable es de tipo string".gettype($typeString). "y tiene valor $typeString";
        echo "<br>";
        echo "La variable es de tipo boolean ".gettype ($typeBol)."y tiene valor $typeBol";
        echo "<br>";

        echo"<br>";
        echo"<br>";

        // 2. Declara dos variables numéricas (a y b), 
        // imprime por pantalla el módulo (a mod b) y la potencia (a elevado a b, ab).


        $a = 0;
        $b = 0;

        $mod = 21 % 11;
        var_dump($mod);
        echo "<br>";
        $pow = 12 ** 3;
        var_dump($pow);
        echo "<br>";

        echo"<br>";
        echo"<br>";

        // 3. Declara tres variables: nombre, apellidos y nacimiento. Asígnales tus datos 
        // e imprímelas por pantalla dentro de una tabla, con bordes.


        $name = "Sete";
        $surname = "Ruiz García";
        $birth = 1987;

        echo "<table border = 2 >";
            echo "<tr>
                    <td>Nombre</td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>$surname</td>
                </tr>
                <tr>
                    <td>Nacimineto</td>
                    <td>$birth</td>
                </tr>
            </tr>";
        echo "</table>";

        echo"<br>";
        echo"<br>";

        // 4. Define una variable llamada edad. Mostrar la edad actual, mostrar la edad que tendrá dentro de 10 años 
        // y los años que le quedan para jubilarse (suponiendo que la edad de jubilación es 60). Por ejemplo, si edad=39, 
        // muestra un mensaje “Actualmente tienes 39 años, dentro de diez tendrás 49. Te quedan 21 para jubilarte”.

        $age = 39;

        $ageWithin10 = $age + 10;
        $yearsToRetire = 60 - $age;

        echo "Actualmente tienes $age, dentro de diez tendrás $ageWithin10. Te quedan $yearsToRetire para jubilarte.";

        echo"<br>";
        echo"<br>";

        // 5. A partir de un precio contenido en la variable precio, muestra el mensaje “caro” si es mayor o igual a 1000, 
        // “medio” si el precio está entre 100 y 1000, “barato” si es menor o igual a 100, y “precio negativo” si es negativo.

        $precio = 100;

            if ($precio < 0) {
                echo "precio negativo";
            } elseif ($precio >= 1000) {
                echo "caro";
            } elseif ($precio >= 100) {
                echo "medio";
            } else {
                echo "barato";
            }

        echo"<br>";
        echo"<br>";

        // 6. Escribe un programa que funcione similar a un reloj, de manera que a partir de los valores de las variables 
        // hora, minuto y segundo muestre la hora dentro de un segundo. 
        // Ten en cuenta que tras las 23:59:59 serán las 0:0:0.

        $hour = 23;
        $minute = 59;
        $second = 59;

        echo "<p>La hora actual es $hour:$minute:$second</p>";
        $second++;

        if($second >= 60){
            $minute++;
            $second = 0;
            if($minute >= 60){
                $hour++;
                $minute = 0;echo"<br>";
                if($hour >= 24){
                    $hour = 0;
                }
            }
        }
        echo "<p>Un segundo después: $hour:$minute:$second</p>";

        echo"<br>";
        echo"<br>";

        // 7. Realiza el código que imprima desde el 1 hasta el número que pongas en la variable maximo.

        $max = 20; 

        for ($i = 1; $i <= $max; $i++) {
            echo $i;
        }

        echo"<br>";
        echo"<br>";

        // 8. Muestra los números del 9 al 15 en una lista desordenada (<ul>). Utiliza un bucle for.

        $number = 9;
        echo "<ul>";
        while ($number < 16){
            echo "<li>";
            echo "$number";
            $number++;
            echo "</li>";
        }
        echo "</ul>";

        echo "<ul>"; 
            for ($i = 9; $i <= 15; $i++) {
                echo "<li>$i</li>";  
            }
        echo "</ul>";

        echo"<br>";
        echo"<br>";

        // 9. Realiza un bucle que imprima por pantalla los números pares entre 0 y 10 (incluidos), 
        // dentro de un solo párrafo, separados por comas: “0, 2, 4, 6, 8, 10”.

        for ($i = 0; $i < 12; $i++) {
            if($i %2 == 0){
            echo "$i";
            }
        }
        echo "</p>";

        echo"<br>";
        echo"<br>";

        // 10. Muestra los números del 50 al 20, salvo los múltiplos de 3 y de 7, en una lista ordenada.

        for ($i = 50; $i > 20; $i--) {
            if($i % 3 != 0 && $i % 7 != 0){
                echo "$i, ";
            }
        }

        echo"<br>";
        echo"<br>";

        // 11. Escribe un programa que sume los números desde el 1 hasta el 10. Muestra por pantalla el resultado. 
        // Es decir, 1+2+3+4+5+6+7+8+9+10=55. (Con que muestre el resultado, 55, es suficiente).

        $sum = 0; 
        for ($i = 1; $i <= 10; $i++) {
            $sum += $i;
        }
        echo $sum;

        echo "<br>";
        echo "<br>";

        // 12. Escribe un programa que dado un número contenido en la variable numero, muestre el factorial del mismo. 
        // El factorial es el producto de los números positivos desde 1 hasta dicho número. 
        // Es decir, el factorial de 5 es 1x2x3x4x5 = 120.

        $num = 1; 
        for ($i = 1; $i <= 5; $i++) {
            $num *= $i;
        }
        echo $num;

        echo "<br>";
        echo "<br>";

        // 13. Dadas un par de variables base y exponente, muestra por pantalla el resultado de elevar la base al exponente. 
        // Tienes que utilizar un bucle for para ello. No puedes usar el operador ** ni el método pow().

        $exp = 2;
        $base = 2;
        for ($i = 1; $i <= 3; $i++){
            $exp *= $i;
        }
        echo $i;

        echo "<br>";
        echo "<br>";

        // 15. Declara una variable llamada numero. Muestra en una tabla (con bordes) la tabla de multiplicar de dicho número. 
        // La primera fila de la tabla es de títulos. Por ejemplo, si numero=7:

        $number = 7;
        echo "<table border = 1>
            <tr>
                <th>a</th>
                <th>b</th>
                <th>resultado</th>
            </tr>";
        for ($i = 0; $i <= 10; $i++){
            echo "<tr>
                    <td>$number</td>
                    <td>$i</td>
                    <td> ".$number * $i . "</td>
                </tr>";    
        }
        echo "</table>";
    ?>
</body>
</html>