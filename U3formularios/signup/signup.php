<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <p>Formulario de registro. Al pulsar el botón enviar, se va al index.</p>

    <form action="index.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" placeholder="Nombre..." name="name" id="name" required>
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass" minlength="5" required>
        <br>
        <label for="pass2"> Confirma la contraseña:</label>
        <input type="password2" name="pass2" id="pass2" minlength="5" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="age" id="age">
        <br>
        <p>Cursos</p>
        <ul>
            <li>
                <input type="checkbox" name="daw" id="daw">
                <label for="daw">DAW (Desarrollo de Aplicaciones Web)</label>
            </li>
            <li>
                <input type="checkbox" name="dam" id="dam">
                <label for="dam">DAM (Desarrollo de Aplicaciones Multiplataformas)</label>
            </li>
            <li>
                <input type="checkbox" name="asir" id="asir">
                <label for="asir">ASIR (Administración de Sistemas Informáticos en Red)</label>
            </li>
        </ul>
        <br>
        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>