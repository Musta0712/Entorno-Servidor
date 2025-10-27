<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>

<body>
    <h3>Clases: Animales</h3>
    <?php

    include "./Cat.php";
    $cat = new Cat("mario", "naranja", 9);
    echo $cat->miaw();

    include "./Minotauro.php";
    $min1 = new Minotauro("Abdelrramán");
    $min2 = new Minotauro("Manolo", 15);
    //$min2->setPet($cat);
    echo "<p>La edad del " . $min1->getName() . " es " . $min1->getAge() . "</p>";
    echo "<p>La edad del " . $min2->getName() . " es " . $min2->getAge() . "</p>";


    echo "<p>Minotauro: $min2</p>"; //Esto funciona porque está sobrescrito el __toString
    ?>
</body>

</html>