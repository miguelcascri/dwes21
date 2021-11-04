<?php
    require 'config.php';
    session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PHP Login Oauth2.0 Google</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <meta name="google-signin-client_id" content="446086727246-95hv3o8l9hnimpopmqikfl91i6i7m4u2.apps.googleusercontent.com">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <br/>
            <h2 align="center">PHP Login Oauth2.0 Google</h2>
            <br/>
            <div class="panel panel-default">
                <?php
                    if(isset($_SESSION['access_token'])){
                        echo '<div class="panel-heading">Bienvenido</div><div class="panel-body">';
                        echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                        echo '<h3><b>Name :</b> '.$_SESSION['nombre']; //echo '.$_SESSION['user_last_name'].'</h3>';
                        echo '<h3><b>Email :</b> '.$_SESSION['email'].'</h3>';
                        echo '<h3><a href="logout.php">Cerrar sesión</h3></div>';
                    }
                    else{
                        echo "<a href='".$client->createAuthUrl()."'><img width='20px' style='margin-bottom:3px; margin-right:5px' alt='Google sign-in' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png' />Sign in with Google</a>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>