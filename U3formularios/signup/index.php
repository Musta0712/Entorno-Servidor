<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal (Landing)</title>
</head>
<body>
    <p>En esta página:</p>
        <ol>
           <li>Se comprueba que ha llegado a través de POST</li> 
           <li>Se instancia un objeto User</li> 
           <li>Se muestra el user creado(toString)</li> 
        </ol>

        <?php
        require $_SERVER["REQUEST_METHOD"] . "/U3formularios/singup/User.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"];
            $email = $_POST["email"];
            $age = $_POST["age"];
            // $courses =$_POST["courses"];
            $u = new User($name, $pass, $email, $age, $courses);
            echo "<p>$u</p>";
        } else {
            echo "<p>No puedes estar aquí</p>";
        } 
        ?>
</body>
</html>