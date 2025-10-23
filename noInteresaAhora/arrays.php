<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h3>Arrys indexados</h3>

    <?php
        //Para declarar
        // 1. Con la función array(...$values)
        $ages = array(25, 19 ,42);
        echo "<p>En la posición 0 esta el número $ages[0]</p>";
        echo "<p>En la posición 0 esta el número $ages[1]</p>";
        echo "<p>En la posición 0 esta el número $ages[2]</p>";

        //Para saber la longitud: count()
        echo "<p>Número de elementos del array " . count($ages). "</p>";

        //2. Directamente metiendo los valores en posiciones
        $names[0] = "Juan";
        $names[1] = "Lucia";
        //Para añadir al final basta con poner []
        $names[] = "Luz";

        //3. Otra forma de declarar arrays
        $courses = ["DWES", "DWEC", "DIW", "EIE"];

        //Recorrer: 
        for ($i = 0; $i < count($names); $i++){
            echo "<p>$i ----> $names[$i]</p>";
        }

        //4. foreach: foreach($array as $value){...}
        foreach ($names as $name){ //Java for(name : names)
            echo"<p>$name</p>";
        }

        $ages[5] = 50;  // Esto se puede hacer pero hay que tener cuidado al recorrerlo
        //En realidad lo que he hecho es convertirlo en un array asciativo
        $size = count($ages);
        var_dump($size);  // 4
        for ($i = 0; $i < count($ages); $i++){
            echo "<p>$ages[$i]</p>";
        }
    ?>

    <h3>Arrays asciativo</h3>

    <?php
        $students = [
            "123W" => "Javi",
            "357S"=> "Luz",
            "987Q"=> "Alberto"
        ];
        //Quiero acceder al nombre "Luz"
        var_dump($students["357S"]);

        //Añado un nuevo elemento
        $students["456Y"] = "Maria";

        var_dump( $students);

        //Modifico un valor
        $students["123W"] = "Juan";
        var_dump($students);

        $school = array (
            "DWES" => "Sete",
            "DWEC" => "Diego",
            "DIW" => "Marco",
            "IPE" => "Santi"
        );

        echo "<p>Profes:</p>";
        //Un array asociativo solo lo puedo recorrer con foreach,
        //for ($i = 0; $i < count($school); $i++){
        //    echo $school[$i];
        //}

        foreach ($school as $teacher){
            echo "<p>$teacher</p>";
        }

        echo "<br><hr>";

        echo "<p>Profes y asignaturas:</p>";
        foreach ($school as $subject => $teacher){
            echo "<p>$teacher imparte $subject</p>";
        }

        echo "<br><hr>";

        $videogame = array (
            "Fifa" => 70,
            "Pokemon" => 40,
            "GTA VI"=> 90,
            "The last of us"=> 30
        );

        echo "<p>Juegos y sus precios</p>";
        foreach( $videogame as $game => $prize){
            echo "<p>$prize $ es el precio de el $game</p>";
        }

        echo "<br><hr>";
        
    ?>

    <h3>Ordenar arrays</h3>
    <?php
        $characters = ["Amador", "Vicente", "Maite", "Javier"];
        //Ordenar de menor a mayor (alfabéticamente): sort solo funciona para indexados
        sort($characters);
        var_dump( $characters );
        echo "<br>";

        //Ordenar al revés: rsort
        rsort( $characters );
        var_dump( $characters );
        echo "<br>";

        $school = array (
            "DWES" => "Sete",
            "DWEC" => "Diego",
            "DIW" => "Marco",
            "IPE" => "Santi"
        );

        // Si utilizo sort con un array asociativo, me cargo las claves(pasan a ser 0, 1, 2, 3...)

        //asort para ordenar de menor a mayor los valores
        asort($school);
        var_dump( $school );
        echo "<br>";

        //Si quiero ordenar de menor a mayor por claves
        ksort( $school );
        var_dump( $school );
        echo "<br>";

        //Si quiero ordenarlo al revés
        krsort( $school );
        var_dump( $school );
        echo "<br>";

        echo "<br><hr>";

        //Buscar si existe un valor por in_array(elemento , array);
        if (in_array("Diego", $school )){
            echo "Si";
        }else{
            echo "No";
        }

        echo "<br><hr>";

        //Buscar si existe una clave:
        //No hay un método específico, pero tengo atajos:
        if (in_array("DWES", array_keys($school))){
            echo "Si";
        }else{
            echo "No";
        }

        echo "<br><hr>";

        $keys = array_keys($school);
        // if(in_array("DWES", $keys)){ ... }  Es lo mismo que arriba

        //Otra forma isset($variable) -> true si existe esa variable o false si no está declarada
        if(isset($computer)){
            echo "Si";
        }else{
            echo "No";
        }

        echo "<br><hr>";

        //Quiero ver si existe la clave "Inglés" del array asociativo $school utilizando isset

        if(isset($school["Ingles"])){
            echo "Si";
        }else{
            echo "No"; //Sale NO porque la variable ($school["Ingles"]) no existe.
        } 
    ?>
    <h2>Repaso Arrays asociativos</h2>
    <?php
    $asoc = [
        "w5" => 'a',
        'w9' => 'b',
        's4' => 'c'
    ];
    var_dump($asoc["w9"]);
    ?>

    <h2>Arrays bidimensionales</h2>
    <?php

    $bid = array(
        array(5,6,7,8),
        array(9,10,11,12),
        array(13,14,15,16)
    );
    //Otra forma de declarlo:
    $bid2 = [
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];

    //Quiero acceder al valor 14:
    var_dump($bid[2][1]);

    echo "<br>";

    //Recorrer con for
    for ($i = 0; $i < count($bid); $i++) {
        for ($j = 0; $j < count($bid[$i]); $j++) {
            echo $bid[$i][$j] .  " - ";
        }
        echo "<br>";
        echo "<br>";
    }

    //Recorrer con foreach
    foreach ($bid as $arrayInterno) { 
        foreach($arrayInterno as $number) {
            echo "$number -  ";
        }
        echo "<br>";
    }
    ?>

    <h2>Array tetradimensionales</h2>

    <?php
    $asignaturas = [
        [
            [   // 1 eva
                ["Subtema 1.1","Subtema 1.2","Subtema 1.3"],
                ["Subtema 2.1","Subtema 2.2"],
                ["Subtema 3.1", "Subtema 3.2", "Subtema 3.3"]
            ],
            [   //2 eva
                ["Subtema 4.1","Subtema 4.2","Subtema 4.3"],
                ["Subtema 5.1","Subtema 5.2"]
            ],
        ],
        [
            [   // 1 eva
                ["Subtema 1.1","Subtema 1.2","Subtema 1.3"],
                ["Subtema 2.1","Subtema 2.2"],
                ["Subtema 3.1", "Subtema 3.2", "Subtema 3.3"]
            ],
        ],
    ];

    ?>

</body>
</html>