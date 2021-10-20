<?php
$number = $_POST['fibonacci'];

function fibonacci ($number){
    $serie_fibonacci = [0,1];

    if($number == null){
        $number = 10;
    }

    for($i = 2; $i <= $number; $i++){
        array_push($serie_fibonacci,($i-1)+($i-2));
    }

    echo "La serie de fibonacci que se desea mostrar es la siguiente: <br>";
    foreach($serie_fibonacci as $numb){
        if($numb == max($serie_fibonacci)){
            echo "$numb.";
        }else{
            echo "$numb, ";
        }
    }
}

fibonacci($number);
?>