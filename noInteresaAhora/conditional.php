<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales de PHP</title>
</head>
<body>
    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);

        //CONDICIONALES: 
        //En Java: if (condición) { instrucciones } else { instrucciones }
        $age = 30;
        if ($age > 30) {
            echo "<p>No tienes abono joven</p>";
        }else{
            echo "<p>Sí tienes abono joven</p>";
        }

        $age = 4;
        if ($age > 3) {
            echo "<p>Bebé</p>";
        }else if ($age < 10) {
            echo "<p>Infantil</p>";
        }else{
            echo "<p>Mayor de 10 años</p>";
        }

        $dia = 2;
        switch($dia){
            case 1: 
                echo "<p>Lunes</p>";
                break;
            case 2: 
                echo "<p>Martes</p>";
                break;
            case 3: 
                echo "<p>Miércoles</p>";
                break;
            case 4: 
                echo "<p>Jueves</p>";
                break;
            case 5: 
                echo "<p>Viernes</p>";
                break;
            default:
                echo "<p>Fin de semana</p>";
                break; // No es necesario, porque ya terminaría el bloque
        }

        //Si la edad esta entre 5 y 12 años (incluidos), que salga el mensaje "estas en el colegio".
        // || OR - && AND
        $age = 6;
        if ($age >= 5 && $age <= 12) {
            echo "<p>Estás en el colegio</p>";
        }

        $number = 5;
        if ($number > 3 || $number < 5) {
            echo "<p>A</p>";
        }else {
            echo "<p>B</p>";
        }

        $number = 7;
        if (! $number == 7) {
            echo "<p>A</p>";
        }else {
            echo "<p>B</p>";
        }

        //OPERADOR TERNARIO
        $age = 4;
        $underAge = false;
        if ($age >= 18) {
            $underAge = false;
        } else {
            $underAge = true;
        }

        //OPERADOR TERNARIO: ( condición ) ? instruccionSiTrue : instruccionSiFalse;
        $underAge = ($age >= 18) ? false : true;


        //BUCLES:
        // for, for each, while, do-while
        //FOR: for(inicialización; condición incrementos)
        //for(int i = 0; i < 10 i++){ instruccuiones }
        //Bucle en PHP que imprima los números del 0 al 9.
        for ($i = 0; $i < 10; $i++) {
            echo"<p>$i</p>";
        }

        echo "<br>";

        echo "<p>";
        //Bucle en PHP que imprima los números del 0 al 9.
        for ($i = 0; $i < 10; $i++) {
            if($i %2 == 0){
                echo "$i";
            }
        }
        echo "</p>";

        echo "<p>";
        echo "<p>Con el ternario</p>";
        for ($i = 0; $i < 10; $i++) {
            echo ($i % 2 == 0) ? $i : null;
        }
        echo "</p>";

        echo "<p>";
        echo "<p>Jugando con los incrementos</p>";
        for ($i = 0; $i < 10; $i+=2) {
            echo "$i";
        }
        echo "</p>";
    ?>

    <h3>Bucles while</h3>
    <?php
        //while(condición){}
        /*
        Transforma este bucle en un while: 
            for ($i = 0; $i < 10; $i++) {
            echo"$i";
        }
        */
        $number = 0;
        echo "<p>";
        while ($number < 10){
            echo "$number";
            $number++;
        }
        echo "</p>";

        //do-while
        /*echo "<p>Resultado: ";
        $i = 11;
        do {
            echo "$i";
            $i++;
        }while ($i < 10);
        echo "</p>"; */

        //Imprime por pantalla los números del 1 al 5 ( incluidos ) dentro de una lista html no ordenada
        echo "<p>Lista no ordenada: </p>";
        $number = 1;
        echo "<ul>";
        while ($number < 6){
            echo "<li>";
            echo "$number";
            $number++;
            echo "</li>";
        }
        echo "</ul>";

    ?>

    <?php

     /*imprimir la letra
        a a a a
        a a a a
        a a a a
        Utilizando OBLIGATARIAMENTE bucles anidados
        */
        for($i = 0; $i <= 2; $i++){
            for($j = 0; $j <= 3; $j++){
                echo "a ";
            }
            echo "<br>";
        }
        echo "<br>";

        /*imprimir los números
        0 0 0 0 0
        1 1 1 1 1
        2 2 2 2 2 
        Utilizando OBLIGATARIAMENTE bucles anidados
        */

        for($i = 0; $i < 3; $i++){
            for($j = 0; $j < 5; $j++){
                echo "$i ";  
            }
            echo "<br>";
        }
        echo "<br>";

        /*imprimir los números
        0 1 2 3 4 5
        0 1 2 3 4 5
        Utilizando OBLIGATARIAMENTE bucles anidados
        */

        for($i = 0; $i <= 1; $i++){
            for($j = 0; $j <= 5; $j++){
                echo "$j ";
            }
            echo "<br>";
        }
        echo "<br>";

        /*imprimir los números
        0  1  2  3  4
        5  6  7  8  9
        10 11 12 13 14
        15 16 17 18 19
        20 21 22 23 24
        Utilizando OBLIGATARIAMENTE bucles anidados
        */

        $n = 0;
        for($i = 0; $i <= 4; $i++){
            for($j = 0; $j <= 4; $j++){
                echo "$n ";
                $n++;
            }
            echo "<br>";
        }

        echo "<br>";

         /*imprimir los números con celdas
        0  1  2  3
        3  4  5  6
        6  7  8  9 
        9  10 11 12 
        12 13 14 15
        Utilizando OBLIGATARIAMENTE bucles anidados
        */

        echo "<table border= 10>";
        $n = 0;
        for($i = 0; $i <= 4; $i++){
            echo "<tr>";
            for($j = 0; $j <= 3; $j++){
                echo "<td>$n</td>";
                $n++;
            }
            $n--;
            echo "</tr>";
        }
        echo "</table>";
        
    ?>
</body>
</html>