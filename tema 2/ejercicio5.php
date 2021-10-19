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
    
    $oracionn = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";

        $change1 = array("Á","í","ó"); 
        $change2 = array("A","i","o");

        $oracionn2 = str_replace($change1, $change2, $oracionn);

        echo $oracionn2."<br>";

        $oracion3 = "74635498 B Rubén González Díaz";

        $change3 = array("é","á","í","ó"," "); 
        $change4 = array("e","a","i","o","");

        $oracion3 = str_replace($change3, $change4, $oracion3);
        echo $oracion3."<br><br>";

        $ventas = array(1.3, 4.5, 5.3, 22.88, 5.65, 87.8, 32.12, 7.05, 9.63, 4.33, 1.3, 4.5, 5.3, 22.3, 5.67, 87.8, 32.12, 7.05, 9.63, 4.33);
        echo "La media diaria de ventas es: ".array_sum($ventas)/20;

        $datos1 = array("Chris"=>38,"Dennis"=>45,"Sarah"=>29,"Karen"=>47);

        echo "<br> Primera tabla";
        echo "<table style border=1>";
            echo "<tr>";
            echo "<th>Person</th>";
            echo "<th>Age</th>";
            echo "</tr>";

        foreach($datos1 as $pers=>$a){;
            echo "<tr>";
            echo "<td>".$pers."</td>";
            echo "<td>".$a."</td>";
            echo "</tr>";
        };
        echo "</table>";

        $productos = array("Destornillador"=>array(1,3),"Llave inglesa"=>array(2,5),"Precio"=>array(2,5));

        echo "<br> Segunda tabla";
        echo "<table style border=1>";
        echo "<tr>";
        echo "<th>Producto</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Precio</th>";
        echo "</tr>";

        foreach($productos as $p=>$v){
            echo "<tr>";
            echo "<td>".$p."</td>";
            echo "<td>".$v[0]."</td>";
            echo "<td>".$v[1]."</td>";
            echo "</tr>";
        };
        echo "<tr>";
        echo "<td colspan=2>Total</td>";
        echo "<td>20</td>";
        echo "</tr>";
        echo "</table>";

        
    ?>
</body>
</html>