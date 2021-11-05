<?php
require 'config.php';
session_start();

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if(!isset($token['error'])){
        //Set the access token used for requests
        $client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];
        
        // get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        
   
        $data = $google_oauth->userinfo->get();

        //Below you can find Get profile data and store into $_SESSION variable
        if(!empty($data['given_name']))
            $_SESSION['nombre'] = $data['given_name'];

        // if(!empty($data['family_name']))
        //     $_SESSION['user_last_name'] = $data['family_name'];

        if(!empty($data['email']))
            $_SESSION['email'] = $data['email'];

        if(!empty($data['gender']))
            $_SESSION['user_gender'] = $data['gender'];

        if(!empty($data['picture']))
            $_SESSION['user_image'] = $data['picture'];

        header("Location: ../dashboard.php");
    } 
    else {
        echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
    }
}
?>