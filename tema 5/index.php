<?php

require 'oauth/config.php';

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
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <meta name="google-signin-client_id" content="446086727246-95hv3o8l9hnimpopmqikfl91i6i7m4u2.apps.googleusercontent.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <title>index.php</title>
</head>

<body style="margin: 10%">
    <p>LOG IN</p>
        <form method="post" action="login.php">
        <p>Email</p>      <input type="email" name="usuario">
        <p>Contraseña</p>  <input type="password" name="pw"><br><br>
        <input type="submit"><br>
        </form>
        <br>
        
        <div class="container">
        <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=530843722092-f4ljk225nm5rhqjc7ad15cdkifkb0ja7.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Fdwes21%2Ftema%25205%2Foauth%2Fgoogle-callback.php&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow">
            <div class="panel panel-default" style="width: 110px; padding: 5px; text-align: center; margin-left: 12px;" >
            <img width='15px' style='margin-bottom:3px;' alt='Google sign-in' 
            src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png' />
            Inicia sesión con Google</a>
            </div>

        </div>
        </form>
</body>
</html>

