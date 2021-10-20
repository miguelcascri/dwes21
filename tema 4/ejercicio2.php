
<?php
$fecha = $_POST['date'];

function esBisiesto ($fecha){
    if((date("Y", strtotime($fecha)) % 4)==0){
        return true;
    }else{
        return false;
    }
}

if(esBisiesto($fecha)){
    echo "El año de la fecha: ".(date("d/m/Y", strtotime($fecha)))." se corresponde con un año bisiesto. <br>";
}else{
    echo "El año de la fecha: ".(date("d/m/Y", strtotime($fecha)))." no se corresponde con un año bisiesto. <br>";
}

?>


