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
            if(isset($_COOKIE["color"])){
                setcookie("color","black",time()-6000000000000000000);
            }     
        }    
    }
    //Se almacena la hora exacta del inicio o creación de sesión    
    $_SESSION["timeout"] = time();
    
}

inactividad();
error_reporting(0);

setcookie("color",$_POST["color"],time()+3600*21);

echo "<br> ¡ESTA ES LA DASHBOARD-2!<br>";

if(!isset($_SESSION["email"])){

    header("Location: "."index.php?msj=3");

}

// He incluido esta redirección para que se cambie el color "automaticamente", 
// pero se puede comentar en caso de ser necesario.
// Un saludo.
header("Location: "."dashboard.php")

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>dashboard2.php</title>
    <style>
        body{
            margin-left: 14%;
            margin: 8%;
        }
    </style>
</head>
<body style="color: <?php echo $_COOKIE["color"] ?>">

    <p>Vuelve a la Dashboard-1:
    <form action="dashboard.php">
        <input type="submit" value="Volver">
    </form>
    </p>
    <br>
    <p>Si has terminado ya... puedes cerrar sesión aquí:
    <form action="logout.php">
        <input type="submit" value="Cerrar Sesión">
    </form>
    </p>
</body>

</html>