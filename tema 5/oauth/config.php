<?php
    require_once 'vendor/autoload.php';

    // init configuration
    $clientID = '530843722092-f4ljk225nm5rhqjc7ad15cdkifkb0ja7.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/dwes21/tema%205/oauth/google-callback.php';
    
    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);

    // autorizaciones a recursos
    $client->addScope("email");
    $client->addScope("profile");

?>