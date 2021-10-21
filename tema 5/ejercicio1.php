<?php
session_start(); // se crea sesion
echo "Sesión iniciada. <br>";
// se guardan datos de sesion
$_SESSION["id"]="Usuario 1";
echo "Se ha creado una sesión con el nombre de usuario: ".$_SESSION["id"].".<br>";
// $nombre="javi";
// echo $nombre;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="ejercicio2.php" class="href">Ejercicio 2</a>
</body>
</html>