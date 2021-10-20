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

//creamos un array
$fechas = [];
//recorremos
foreach($datos as $clave => $valor){
    $fecha_int = $valor["fecha_int"];
    $fecha_date = $valor["fecha_date"];
    $fecha_datetime = $valor["fecha_datetime"];
    $fecha_time = $valor["fecha_time"];
    $fecha_timestamp = $valor["fecha_timestamp"];
    
    $fecha_dateS = strtotime($fecha_date);
    $fecha_datetimeS = strtotime($fecha_datetime);
    $fecha_timeS = strtotime($fecha_time);
    $fecha_timestampS = strtotime($fecha_timestamp);

    array_push($fechas, $fecha_int);
    array_push($fechas, $fecha_dateS);
    array_push($fechas, $fecha_datetimeS);
    array_push($fechas, $fecha_timeS);
    array_push($fechas, $fecha_timestampS);

    rsort($fechas);
    foreach($fechas as $fecha){
        echo $fecha." ==>".date("Y-m-d // H:m:s", $fecha)."<br>";
    }

}
?>