<?php

$name = $_POST['user'];
$contraseña = $_POST['pw'];

function existeUsuario ($name, $contraseña){
 
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
echo "Conectado correctamente <br>";

//preparamos sentencia
$consulta="SELECT usuario, contraseña FROM usuarios";

//seleccionamos base de datos
mysqli_select_db($conn,"medac");

//ejecutamos consulta a bd
$datos= mysqli_query($conn,$consulta);

    foreach($datos as $clave => $value){
        $usuario = $value["usuario"];
        $password = $value["contraseña"];

        if (($name === $usuario) && ($contraseña === $password)){
            return true;
        }else{
            return false;
        }
    }
}

if(existeUsuario($name, $contraseña)){
    echo "Los datos introducidos sí existen en la base de datos";
}else{
    echo "Los datos introducidos no existen en la base de datos";
}

?>