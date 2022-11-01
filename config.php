<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('757306122555-v1qh6jh6r02375mblsgdiuf17k19s6el.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/GoogleLogin/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>