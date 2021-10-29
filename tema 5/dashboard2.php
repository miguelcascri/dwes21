<?php

session_start(); 

function inactividad(){

    //Se indica el tiempo de actividad (seg)  
    $tiempoInactivo = 60; 
    // Si existe un valor para la clave timeout, 
    //la sesión ha sido establecida y se procede con el cálculo restante       
    if(isset($_SESSION["timeout"])){ //Se calcula el tiempo que ha transcurrido desde que se conectó   
        $sessionTTL = time()-$_SESSION["timeout"];  
        //Si el tiempo de inactividad supera al establecido se cierra la sesión y 
        // se lanza un fichero PHP con un aviso        
        if($sessionTTL > $tiempoInactivo){            
            session_destroy();            
            header("Location: index.php?msj=4");        
        }    
    }
    //Se almacena la hora exacta del inicio o creación de sesión    
    $_SESSION["timeout"] = time();
    
}

inactividad();

setcookie("color",$_POST["color"],time()+3600*21);

echo "<br> ¡ESTA ES LA DASHBOARD-2!<br>";

// Si no ha iniciado sesión (introducido sus datos en el log in, salta error y redirige)
if(!isset($_SESSION["email"])){

    header("Location: "."index.php?msj=3");

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard2.php</title>

</head>
<body>
    <p>Si has terminado ya... puedes cerrar sesión aquí:
    <form action="logout.php">
    <input type="submit" value="Cerrar Sesión">
    </form>
    </p>

    <p>Vuelve a la Dashboard:
    <form action="dashboard.php">
    <input type="submit" value="Volver">
    </form>
    </p>

</body>
</html>
