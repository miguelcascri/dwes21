<?php
    $dado1 = mt_rand(1,6);
    $dado2 = mt_rand(1,6); 
    $dado3 = mt_rand(1,6); 

    echo "Los números que han salido son: $dado1, $dado2 y $dado3. <br>";

    if($dado1 == 6 && $dado2 == 6 && $dado3 == 6 ){
        echo "Excelente.";
    }elseif (($dado2 == 6 && $dado3 == 6) || ($dado1 == 6 && $dado3 == 6) || ($dado1 == 6 && $dado2 == 6)){ 
        echo "Muy bien.";
    }elseif ($dado1 == 6 || $dado2 == 6 || $dado3 == 6){
        echo "Regular.";
    }else{
        echo "Pésimo.";
    }

?>