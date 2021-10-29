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

echo "<br> ¡AUTENTICACIÓN CORRECTA!<br>";
echo "<br> Sesión iniciada.
<br> Email: ".$_SESSION["email"].".
<br> Nombre: ".$_SESSION["nombre"].".";


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
    <title>dashboard.php</title>
<?php

if(isset($_COOKIE['color'])){

    // echo "style{color: ".$_COOKIE['color']";".};
}    
?>

</head>
<body style="color: $_COOKIE['color']">
    <form method="post" action="dashboard2.php"><br>
    <input type="radio" value="#ff0000" name="color"><span style="color: red;">Rojo</span>
    <input type="radio" value="#0000ff" name="color"><span style="color: blue;">Azul</span>
    <input type="radio" value="#00ff00" name="color"><span style="color: green;">Verde</span>
    <input type="radio" value="#ffffff" name="color"><span style="color: black;">Negro</span>
    <br><br>
    <input type="submit" value="Cambiar">
    </form>

    <br>
    <p>Si has terminado ya... puedes cerrar sesión aquí:
    <form action="logout.php">
    <input type="submit" value="Cerrar Sesión">
    </form>
    </p>
</body>
</html>
