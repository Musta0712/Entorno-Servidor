<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
    //Para incluir las funciones
    include ('./functions.php');
    include('./empleados.php');
    //Crear arrays BIDI 6x3
    //filas $i columnas $j
    for ($i = 0; $i < 6; $i++){
        for ($j = 0; $j < 3; $j++){
            $bidi[$i][$j] = ($i + $j);
        }
    }

    //Ahora lo muestro(Siempre igual)
    for($i = 0; $i < count($bidi); $i++){
        for($j = 0; $j < count($bidi[$i]); $j++) {
            echo $bidi[$i][$j] . " ";
        }
        echo "<br>";
    }

    var_dump($bidi);
    ?>

    <h2>Ejercicio 2</h2>
    <?php
    //Crear un array BIDI 5x5 y que guarde si o no dependiendo del caso
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 5; $j++){
            //Si coinciden...
            if ($i == $j){
                $bidi2[$i][$j] = "si";
            }else{
                $bidi2[$i][$j] = "no";
            }
        }
    }

    //Ahora lo muestro
    for($i = 0; $i < count($bidi2); $i++){
        for($j = 0; $j < count($bidi2[$i]); $j++) {
            echo $bidi2[$i][$j] . " ";
        }
        echo "<br>";
    }

    var_dump($bidi2)
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    echo "Primera media --> "; print_r(average(2,4,6));
    echo "<br>";
    echo "Segunda media --> "; print_r(average());
    echo "<br>";
    echo "Tercera media --> "; print_r(average(-3, -5, 10));
    ?>

    <h2>Ejercicio 4</h2>
    <?php
    echo "Base 4, exponente 3 --> "; print_r(multiply(4, 3));
    echo "<br>";
    echo "Base 5, exponente default(3)--> "; print_r(multiply(5));
    echo "<br>";
    echo "Base 2, exponente 6 --> "; print_r(multiply(2, 6));
    ?>

    <h2>Ejercicio 5</h2>
    <?php
    //Crear un array asociativo de 4 personas
    $persons = [
        7 => "Adri",
        12 => "Sara",
        20 => "Marcos",
        2 => "ALvaro"
    ];

    //Lo ordenamos por clave
    ksort($persons);
    print_r($persons);

    //Lo recorremos
    foreach ($persons as $id => $name){
        echo"<ul>";
            echo"<li>$id es el id de $name</li>";
        echo "</ul>";
    }
    ?>

    <h2>Ejercicio 6</h2>B234
    <p>Imprimimos la edad del empleado con codigo "B234" en un párrafo</p>
    <?php
    echo "<p>" . $empleados["B234"]["edad"] . "</p>";
    ?>

    <p>Imprime la lista ordenada(ol) los nombres y si están activos o no, siguiendo el formato:
    1. Carlos está activo
    2. Lucia no está activa...</p>
    <?php
    echo "<ol>";
        foreach($empleados as $key => $info){
            if ($info["activo"]== true){
                echo "<li>" . $info[$nombre] . " está activo </li>";
            }else{
                echo "<li>" . $info[$nombre] . " no es está activo </li>";
            }
        }
    echo "</ol>";
    ?>
</body>
</html>