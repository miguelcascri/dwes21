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
    error_reporting (E_ERROR | E_PARSE) ;
    $varTexto = "Hola";
    $varEntero = 1234;
    $varBool = true;
    $varFloat = 1.4;
    $varArray = array(1,3,5);

    if(is_string($varEntero)==0){
        echo "La variable ".'$varEntero'." no es un string.<br>";
    }else{
        echo "La variable ".'$varEntero'." sí es un string.<br>";
    };
    if(is_string($varTexto)==0){
        echo "La variable ".'$varTexto'." no es un string.<br>";
    }else{
        echo "La variable ".'$varTexto'." sí es un string.<br>";
    };
    if(is_string($varBool)==0){
        echo "La variable ".'$varTexto'." no es un string.<br>";
    }else{
        echo "La variable ".'$varBool'." sí es un string.<br>";
    };
    if(is_string($varFloat)==0){
        echo "La variable ".'$varFloat'." no es un string.<br>";
    }else{
        echo "La variable ".'$varFloat'." sí es un string.<br>";
    };
    if(is_string($varArray)==0){
        echo "La variable ".'$varArray'." no es un string.<br>";
    }else{
        echo "La variable ".'$varArray'." sí es un string.<br>";
    };

    echo "===================================================================================================== <br>";
        

    if(is_string(strval($varEntero)==0)){
        echo "La variable ".'$varEntero'." no es un string.<br>";
    }else{
        echo "La variable ".'$varEntero'." sí es un string.<br>";
    };
    if(is_string($varTexto)==0){
        echo "La variable ".'$varTexto'." no es un string.<br>";
    }else{
        echo "La variable ".'$varTexto'." sí es un string.<br>";
    };
    if(is_string(strval($varBool)==0)){
        echo "La variable ".'$varTexto'." no es un string.<br>";
    }else{
        echo "La variable ".'$varBool'." sí es un string.<br>";
    };
    if(is_string(strval($varFloat)==0)){
        echo "La variable ".'$varFloat'." no es un string.<br>";
    }else{
        echo "La variable ".'$varFloat'." sí es un string.<br>";
    };
    if(is_string(strval($varArray))){
        echo "La variable ".'$varArray'." no es un string.<br>";
    }else{
        echo "La variable ".'$varArray'." sí es un string.<br>";
    };

    echo "<br><br> No hay ningún Warning por uso de (E_ERROR | E_PARSE) ";

    echo "===================================================================================================== <br>";
        
    echo "<h2> Ejercicio EXTRA </h2>";

    $cad = "12by3a";
    echo "$cad <br>";
    echo "Comprobación: ".intval($cad)."<br>";

    define("varFinal","drogas");
    echo "No tomes ".varFinal."<br>";
    ?>
</body>
</html>