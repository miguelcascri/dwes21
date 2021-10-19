<?php
// $array0 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array1 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array2 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array3 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array4 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array5 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array6 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array7 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array8 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];
// $array9 = [mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10), mt_rand(1,10)];

// $matrix = [$array0, $array1, $array2, $array3, $array4, $array5, $array6, $array7, $array8, $array9];

$array0 = []; $array1  = []; $array2  = []; $array3  = []; $array4  = []; $array5  = []; $array6  = []; $array7  = []; $array8  = []; $array9  = [];
$matrix = [$array0, $array1, $array2, $array3, $array4, $array5, $array6, $array7, $array8, $array9];

for($c1 = 0; $c1 <= 9; $c1++){
    for($c2 = 0; $c2 <= 9; $c2++){
        array_push($matrix[$c1],mt_rand(1,10));
    }
}
$count = 0;

for($i = 0; $i <= 9; $i++){
    echo"Los arrays obtenidos son --> Array$count: "; print_r($matrix[$i]); 
    echo "<br>";
    $count++;
}

$suma_diagonal1 = 0;
$suma_diagonal2 = 0;

for($c1 = 0; $c1 <= 9; $c1++){
    for($c2 = 0; $c2 <= 9; $c2++){
        if($c1 == $c2){
            $suma_diagonal1 += $matrix[$c1][$c2];
        }
        if($c1 == (9-$c2)){
            $suma_diagonal2 += $matrix[$c1][$c2];
        }
    }
}

echo "<br> La suma de la diagonal principal es $suma_diagonal1.";
echo "<br> La suma de la diagonal secundaria es $suma_diagonal2.";
echo "<br> La diferencia es: ". $suma_diagonal1-$suma_diagonal2;


?>