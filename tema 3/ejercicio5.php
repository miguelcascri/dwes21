<?php

$array1 = [];
$count = 0;

for($i = 0; $i <10;$i++){
    array_push($array1, mt_rand(0,10));
}

print_r($array1);

foreach($array1 as $valor){
    if($valor === 2){
        $count++;
    }
}

echo "<br> Ha habido $count veces que se ha repetido el valor 2."


?>