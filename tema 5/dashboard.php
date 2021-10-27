<?php
ini_set("session.cookie_lifetime","10");
ini_set("session.gc_maxlifetime","10");
session_start(); // se crea sesion
echo "Sesión iniciada. Usuario: ".$_SESSION["id"]." <br>";
echo "<br> ¡AUTENTIFICACIÓN CORRECTA!";

// $tiempoInactivo = 10; 
// // Si existe un valor para la clave timeout, la sesión ha sido establecida y se procede con el cálculo restante       
// if(isset($_SESSION["timeout"])){ //Se calcula el tiempo que ha transcurrido desde que se conectó   
//     $sessionTTL = time()-$_SESSION["timeout"];  
//     //Si el tiempo de inactividad supera al establecido se cierra la sesión y se lanza un fichero PHP con un aviso        
//     if($sessionTTL > $tiempoInactivo){            
//     session_destroy();            
//     header("Location: "."index.php");        
//     }    
// }
// //Se almacena la hora exacta del inicio o creación de sesión    
// $_SESSION["timeout"] = time();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.php</title>

</head>
<body>
    <p>Si has terminado ya... puedes cerrar sesión aquí:</p>
    <a href="logout.php" >Logout</a>
</body>
</html>