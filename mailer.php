<?php
$to = "extraterra1@gmail.com";
$subject = "Support requested by ".$_POST['name'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];

$headers = 'From: '.$_POST['email'].'' . "
" .
   'Reply-To: '.$_POST['email'].'' . "
" .
   'X-Mailer: PHP/' . phpversion();
 
$body = $message;

mail($to, $subject, $body, $headers );
header( 'Location: http://www.landingpage.html' ) ; //replace with landing page.
?>