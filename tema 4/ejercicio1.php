
<?php
$number = $_POST['number'];

function esPrimo ($number){
    if($number < 2){
        return false;
    }else{
        for($i = 2; $i < $number; $i++){
            if ($number % $i == 0){
                return false;
            }else{
                return true;
            }
        } 
    }
}

if(esPrimo($number)){
    echo "$number es primo.";
}else{
    echo "$number no es primo.";
}

?>


