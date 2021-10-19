<?php

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
$consulta="SELECT * FROM usuarios";

//seleccionamos base de datos
mysqli_select_db($conn,"medac");

//ejecutamos consulta a bd
$datos= mysqli_query($conn,$consulta);

$arrayTiempo = []
//recorremos
// foreach($datos as $clave => $valor){
//     $fecha_int = $valor["fecha_int"];
//     $fecha_date = $valor["fecha_date"];
//     $fecha_datetime = $valor["fecha_datetime"];
//     $fecha_time = $valor["fecha_time"];
//     $fecha_timestamp = $valor["fecha_timestamp"];
    
// }


// array_push($arrayTiempo, $fecha_int = $valor["fecha_int"]);
// array_push($arrayTiempo, $fecha_date = $valor["fecha_date"]);
// array_push($arrayTiempo, $fecha_datetime = $valor["fecha_datetime"]);
// array_push($arrayTiempo, $fecha_time = $valor["fecha_time"]);
// array_push($arrayTiempo, $fecha_timestamp = $valor["fecha_timestamp"]);

?>