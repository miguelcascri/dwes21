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

//recorremos
foreach($datos as $clave => $valor){
    $fecha_int = $valor["fecha_int"];
    $fecha_date = $valor["fecha_date"];
    $fecha_datetime = $valor["fecha_datetime"];
    $fecha_time = $valor["fecha_time"];
    $fecha_timestamp = $valor["fecha_timestamp"];

    echo "$fecha_int"." ==========> ".date("Y-m-d // H:m:s", strtotime($fecha_int))."<br>";
    echo "$fecha_date"." =========> ".date("Y-m-d // H:m:s", strtotime($fecha_date))."<br>";
    echo "$fecha_datetime"." ==> ".date("Y-m-d // H:m:s", strtotime($fecha_datetime))."<br>";
    echo "$fecha_time"." ===========> ".date("Y-m-d // H:m:s", strtotime($fecha_time))."<br>";
    echo print_r($fecha_timestamp)." ==> ".date("Y-m-d // H:m:s", strtotime($fecha_timestamp))."<br><br>";

    $fecha_intS = strtotime($fecha_int);
    $fecha_dateS = strtotime($fecha_date);
    $fecha_datetimeS = strtotime($fecha_datetime);
    $fecha_timeS = strtotime($fecha_time);
    $fecha_timestampS = strtotime($fecha_timestamp);

    // echo $fecha_intS."<br>";
    // echo $fecha_dateS."<br>";
    // echo $fecha_datetimeS."<br>";
    // echo $fecha_timeS."<br>";
    // echo $fecha_timestampS."<br>";

    echo "$fecha_int"." ==========> ".date("Y-m-d // H:m:s", strtotime('-15 days', $fecha_intS))."<br>";
    echo "$fecha_date"." =========> ".date("Y-m-d // H:m:s", strtotime('-15 days', $fecha_dateS))."<br>";
    echo "$fecha_datetime"." ==> ".date("Y-m-d // H:m:s", strtotime('-15 days', $fecha_datetimeS))."<br>";
    echo "$fecha_time"." ===========> ".date("Y-m-d // H:m:s", strtotime('-15 days', $fecha_timeS))."<br>";
    echo "$fecha_timestamp"." ==> ".date("Y-m-d // H:m:s", strtotime('-15 days', $fecha_timestampS))."<br><br>";

}

?>