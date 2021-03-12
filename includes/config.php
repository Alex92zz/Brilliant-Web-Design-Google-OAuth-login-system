<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();

$gClient->setClientId("71645259025-fjqs7es89spded2dafae1ro7mulubjtg.apps.googleusercontent.com");

$gClient->setClientSecret("NSIE91xqXkHFKx55Q5kV7hKk");

$gClient->setApplicationName("php-brilliant-website");

$gClient->setRedirectUri("http://localhost/php-brilliant-website/controller.php");

$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>
