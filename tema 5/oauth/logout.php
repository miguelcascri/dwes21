<?php
    include('config.php');
    session_start();
    $accesstoken=$_SESSION['access_token'];
    
    //Reset OAuth access token
    $client->revokeToken($accesstoken);
    
    //Destroy entire session data.
    session_destroy();
    
    //Acabamos con la cookie de color
    setcookie("color","black",time()-6000000000000000000);

    //redirect page to index.php
    header('location:../index.php');
?>