<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	  exit('fail');
   }

$ip = $_SERVER['REMOTE_ADDR'];
 
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'orhandwk@code.edu.az,info@bakuweb.az'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "bakuweb.az'a müraciət edən:  $name";
$email_body = "Məlumatlar:\n\nAd: $name\n\nE-mail: $email_address\n\nIP: $ip\n\nTelefon: $phone\n\nMüraciətin məzmunu:\n$message";
$headers = "From: info@bakuweb.az\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
$send = mail($to,$email_subject,$email_body,$headers); // 


exit('ok');	
?>