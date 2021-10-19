<?php

$array1 = [];
$i = 0;
$count = 0;

do{
    $random = mt_rand(1,10);
    $array1 = $random;
}while($i <= 9);

foreach($array1 as $valor){
    if($valor == 2){
        $count++;
    }
}
print_r($array1);

?>