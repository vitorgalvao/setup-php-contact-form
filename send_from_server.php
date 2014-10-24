<?php

// get these (and add/remove as necessary) from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// set specifically to each case
$email_to = '<target_email_adress>';
$subject = '<email_subject>';
$body = '<content_of_the_email>';

// ------------------------------------------ //

// PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsHTML(false);
$mail->SetFrom("$email", "$name");
$mail->Subject = "$subject";
$mail->Body = "$body"
$mail->AddAddress("$email_to");

// logic for after sending
if($mail->Send()) {
  $outcome = 'success';
} else {
  $outcome = 'failure';
}

$url = $_SERVER['HTTP_REFERER'].'?outcome='.$outcome;
header("Refresh: 0; URL=\"" . $url . "\"");

?>
