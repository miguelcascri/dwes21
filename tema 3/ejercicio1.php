
<?php
    $peso = $_POST['peso']; #kg
    $altura = $_POST['altura']; #metros

    $imc = $peso/($altura*$altura); #el elevado se pude usar así = 5^2

    echo "Tu peso es de $peso y tu altura de $altura, por lo que tu imc es: $imc. <br>";
    if($imc < 18.5 ){
        echo "Situación de bajo peso.";
    }elseif(18.5 <= $imc AND $imc < 25){ #se puede usar && y AND
        echo "Situación de peso normal (normopeso).";
    }elseif(25 <= $imc AND $imc < 27){
        echo "Situación de sobrepeso de grado I.";
    }elseif(27 <= $imc && $imc < 30){
        echo "Situación de sobrepeso de grado II.";
    }elseif(30 <= $imc && $imc < 35){
        echo "Situación de obesidad de tipo I.";
    }elseif(35 <= $imc && $imc < 40){
        echo "Situación de obesidad de tipo II.";
    }elseif(40 <= $imc && $imc < 50){
        echo "Situación de obesidad de tipo III (mórbida).";
    }elseif($imc <= 50){
        echo "Situación de obesidad de tipo IV (extrema).";
    }

    ?>