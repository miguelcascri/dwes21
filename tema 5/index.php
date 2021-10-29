<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>

</head>
<body>
    <p>LOG IN</p>
        <form method="post" action="login.php">
        <p>Email</p>      <input type="email" name="usuario">
        <p>Contraseña</p>  <input type="password" name="pw"><br><br>
        <input type="submit">
        </form>
</body>
</html>

<?php

if(isset($_GET["msj"])){

    if($_GET["msj"]=="1"){
        echo '<script language="javascript">alert("Error, autenticación incorrecta.");</script>';
    }

    if($_GET["msj"]=="2"){
        echo '<script language="javascript">alert("Sesión cerrada con éxito.");</script>';
    }

    if($_GET["msj"]=="3"){  
        echo '<script language="javascript">alert("No se ha iniciado sesión.");</script>';
    }

    if($_GET["msj"]=="4"){  
        echo '<script language="javascript">alert("La sesión ha caducado.");</script>';
    }
}

?>
