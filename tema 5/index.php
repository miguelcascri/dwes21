<?php

if(isset($_GET["msj"])){

    if($_GET["msj"]=="1"){
        // echo '<script language="javascript">alert("Error, autenticación incorrecta.");</script>';

        echo '<div class="alert alert-danger" role="alert">Error, autenticación incorrecta.</div>';
    }

    if($_GET["msj"]=="2"){
        // echo '<script language="javascript">alert("Sesión cerrada con éxito.");</script>';

        echo '<div class="alert alert-success" role="alert">Sesión cerrada con éxito.</div>';
    }

    if($_GET["msj"]=="3"){  
        // echo '<script language="javascript">alert("No se ha iniciado sesión.");</script>';

        echo '<div class="alert alert-danger" role="alert">No se ha iniciado sesión.</div>';
    }

    if($_GET["msj"]=="4"){  
        // echo '<script language="javascript">alert("La sesión ha caducado.");</script>';

        echo '<div class="alert alert-warning" role="alert">La sesión ha caducado.</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index.php</title>

</head>
<body style="margin: 10%">
    <p>LOG IN</p>
        <form method="post" action="login.php">
        <p>Email</p>      <input type="email" name="usuario">
        <p>Contraseña</p>  <input type="password" name="pw"><br><br>
        <input type="submit">
        </form>
</body>
</html>

