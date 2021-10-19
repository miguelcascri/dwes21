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
    $fecha_timestap = $valor["fecha_timestamp"];

    echo "$fecha_int"." =========> ".date("Y-m-d // H:i:s", $fecha_int)."<br>";
    echo "$fecha_date"." =========> ".date("Y-m-d // H:i:s", strtotime($fecha_date))."<br>";
    echo "$fecha_datetime"." ==> ".date("Y-m-d // H:i:s", strtotime($fecha_datetime))."<br>";
    echo "$fecha_time"." ===========> ".date("Y-m-d // H:i:s", strtotime($fecha_time))."<br>";
    echo "$fecha_timestap"." ==> ".date("Y-m-d // H:i:s", strtotime($fecha_timestap))."<br><br>";


    echo "$fecha_int"." =========> ".date("Y-m-d // H:i:s", strtotime('15 days', $fecha_int))."<br>";
    echo "$fecha_date"." =========> ".date("Y-m-d // H:i:s", strtotime('15 days', $fecha_date))."<br>";
    echo "$fecha_datetime"." ==> ".date("Y-m-d // H:i:s", strtotime('15 days', $fecha_datetime))."<br>";
    echo "$fecha_time"." ===========> ".date("Y-m-d // H:i:s", strtotime('15 days', $fecha_time))."<br>";
    echo "$fecha_timestap"." ==> ".date("Y-m-d // H:i:s", strtotime('15 days', $fecha_timestap))."<br><br>";


}

?>