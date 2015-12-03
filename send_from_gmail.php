<?php

// get these (and add/remove as necessary) from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// set specifically to each case
$email_to = '<target_email_adress>';
$subject = '<email_subject>';
$body = '<content_of_the_email>';
// gmail specific info
$gmail_email = '<email_adress_to_send_from>';
$gmail_pasword = '<email_password>';

// ------------------------------------------ //

// PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsHTML(false);
$mail->SetFrom("$email", "$name");
$mail->Subject = "$subject";
$mail->Body = "$body";
$mail->AddAddress("$email_to");

// send from gmail
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = "$gmail_email";
$mail->Password = "$gmail_password";
$mail->AddReplyTo("$email", "$name");

// logic for after sending
if($mail->Send()) {
  $outcome = 'success';
} else {
  $outcome = 'failure';
}

$url = $_SERVER['HTTP_REFERER'].'?outcome='.$outcome;
header("Refresh: 0; URL=\"" . $url . "\"");

?>
