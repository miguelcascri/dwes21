<?php

$email = $_POST['usuario'];
$contraseña = $_POST['pw'];

function existeUsuario ($email, $contraseña){
 
/* CONEXION A BASE DE DATOS */
//datos para acceso a la bbdd
$servername="localhost";
$database="medac";
$username ="root";
$password="";

// crear conection
$conn = mysqli_connect($servername,$username,$password,$database);

// check conection
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

//preparamos sentencia
$consulta="SELECT email, password FROM usuarios";

//seleccionamos base de datos
mysqli_select_db($conn,"medac");

//ejecutamos consulta a bd
$datos= mysqli_query($conn,$consulta);

    foreach($datos as $clave => $value){
        $usuario = $value["email"];
        $password = $value["password"];

        if (($email === $usuario) && ($contraseña === $password)){
            return true;
        }else{
            return false;
        }
    }
}

if(existeUsuario($email, $contraseña)){
    session_start(); // se crea sesion
    $_SESSION["id"]="$email";
    header("Location: "."dashboard.php");
}else{
    header("Location: "."index.php?message=1");
    // header("Location: "."index.php");
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
</head>
<body>

</body>
</html>
