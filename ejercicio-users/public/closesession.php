<?php
//Cierra sesión y redirige a signup.
session_start();
session_destroy();
header("Location: form-login.php");

//borro las cookies: le pongo sin tiempo pasado
setcookie("stau-connected", "", time() - 3600);
//esto se ejecuta aunque este después del header