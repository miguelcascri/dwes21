<?php
ini_set("session.cookie_lifetime","10");
ini_set("session.gc_maxlifetime","10");
session_start(); // se crea la sesion
echo "<br> ¡AUTENTIFICACIÓN CORRECTA!<br>";
echo "<br> Sesión iniciada. Usuario: ".$_SESSION["id"].". <br>";

// include "login.php";
// if($_SESSION["id"]!="$email"){

//     header("Location: "."index.php?message=3");
// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.php</title>

</head>
<body>
    <p>Si has terminado ya... puedes cerrar sesión aquí:
    <form action="logout.php">
    <input type="submit" value="Cerrar Sesión">
    </form>
    </p>

</body>
</html>
