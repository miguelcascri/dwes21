<?php

$array1 = [1,4,7,8,234,200,6758,345,2,45];

$array2 = $array1;
sort($array1);
print_r($array2);
echo "El valor mayor del array es $array1[9] \n";

?>