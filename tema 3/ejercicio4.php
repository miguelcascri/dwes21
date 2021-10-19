<?php

$array1= [];

for($i = 0; $i <10;$i++){
    array_push($array1, mt_rand(0,999));
}

$array2 = $array1;
sort($array1);
print_r($array2);
echo "El valor mayor del array es $array1[9].";

?>