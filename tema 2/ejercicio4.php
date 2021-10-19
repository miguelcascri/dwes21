<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $oracion = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";
    echo $oracion."<br>";
    $changed = str_replace("Á","A",$oracion);
    $changed = str_replace("í","i",$changed);
    $changed = str_replace("ó","o",$changed);

    echo $changed."<br>";

    echo "La cadena tiene ".strlen($oracion)." caracteres <br>";

    echo mb_strtoupper($oracion)."<br>";

    $oracion2 = "74635498 B Rubén González Díaz";
    echo $oracion2."<br>";
    $changed2 = str_replace("é","e",$oracion2);
    $changed2 = str_replace("í","i",$changed2);
    $changed2 = str_replace("á","a",$changed2);
    $changed2 = str_replace(" ","",$changed2);

    echo $changed2."<br>";

    

    ?>
</body>
</html>