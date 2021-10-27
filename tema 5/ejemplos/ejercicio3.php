<?php
session_start(); // se inicia la sesión
// Se accede a los datos la sesión

echo "Bienvenido de nuevo ".$_SESSION["id"]." estás en el ejercicio 3.<br>";
session_destroy();

// echo "$nombre";
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