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
 $varTexto = "Hola";
 $varEntero = 1234;
 $varBool = true;
 $varFloat = 1.4;
 $varArray = array(1,3,5);

        echo "Variable de tipo cadena de texto: ".$varTexto."<br>";
        echo "Variable de tipo entero: ".$varEntero."<br>";
        echo "Variable de tipo boolean: ".$varBool."<br>";
        echo "Variable de tipo float: ".$varFloat."<br>";
        echo "Variable de tipo compuesto: ";
        echo print_r($varArray)." <br>";
        #La   función   print_r   es   la   utilizada   para   imprimir el contenido de un array

        echo "=====================================================================================================";

        echo 'Variable de tipo cadena de texto: $varTexto '.$varTexto.'<br>';
        echo "Variable de tipo entero: $varEntero ".'$varEntero'.'<br>';
        echo 'Variable de tipo boolean: '.$varBool.'<br>';
        echo 'Variable de tipo float: $varFloat '.$varFloat.'<br>';
        echo 'Variable de tipo compuesto: print_r(varArray) ';
        echo print_r($varArray).'<br>';

    ?>
</body>
</html>