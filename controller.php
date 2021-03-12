<?php
require_once "includes/config.php";
include 'includes/autoloader.inc.php';

if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
}else{
    header('Location: log-in.php');
    exit();
}

if(isset($token["error"]) != "invalid_grant"){
    // get data from google
    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();
    
    // variables with user data 
    $firstName = $userData['givenName'];
    if(empty($firstName)){$firstName = "empty";}
    
    $lastName = $userData['familyName'];
    if(empty($lastName)){$lastName = "empty";}
    
    $email = $userData['email'];
    
    // function for generating password and login session
    function generateCode($length){
		$chars = "vwhg?t!s*WJFS%&02837";
		$code = ""; 
		$clean = strlen($chars) - 1;
		while (strlen($code) < $length){ 
			$code .= $chars[mt_rand(0,$clean)];
		}
		return $code;
    }
    
    
    // checking if user email exists in database
    $checkUserExists = new UsersView;        
    $info = $checkUserExists ->showUsers($email);
    echo "<script>console.log(JSON.parse('" . json_encode($info) . "'));</script>";
        
    
    if(empty($info)){
        //insert data in the database
        $user = new UsersContr;
        $session = generateCode(10);
        $user -> createUser($email, $firstName, $lastName, $session);
        echo "<script>console.log('new user created');</script>";
        
        if($user){
            $newuser = $checkUserExists ->showUsers($email);
            setcookie("id", $newuser[0]['id'], time()+60*60*24*30, "/", NULL);
            setcookie("sess", $session, time()+60*60*24*30, "/", NULL);
            header('Location: my-details.php');
            }else{
                return "Error inserting user!";
                header('Location: log-in.php');
            exit();
            }
    }else{
        setcookie("id", $info[0]['id'], time()+60*60*24*30, "/", NULL);
        setcookie("sess", $info[0]["session"], time()+60*60*24*30, "/", NULL);
        echo "<script>console.log('array exists in database');</script>";
        header('Location: my-details.php');
        }
    
}else{
    header('Location: log-in.php');
    exit();
}
?>
