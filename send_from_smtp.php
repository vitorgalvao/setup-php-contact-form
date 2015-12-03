<?php

// Get these (and add/remove as necessary) from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set specifically to each case
$email_to = '<target_email_adress>';
$subject = '<email_subject>';
$body = '<content_of_the_email>';

// SMTP specific info
$smtp_host = '<smtp_host_address>';
$smtp_port = <smtp_port_number>;
$smtp_username = '<email_adress_to_send_from>';
$smtp_password = '<email_password>';

// ------------------------------------------ //

// PHPMailer
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);

try {
	$mail->CharSet = 'UTF-8';
	$mail->IsHTML(false);
	
	$mail->IsSMTP();
	//$mail->SMTPDebug = 4;
	$mail->SMTPAuth = true;
	$mail->Host = "$smtp_host";
	$mail->Port = "$smtp_port";
	$mail->Username = "$smtp_username";
	$mail->Password = "$smtp_password";
	
	$mail->SetFrom("$email", "$name");
	$mail->AddAddress("$email_to");
	$mail->Subject = "$subject";
	$mail->Body = "$body";

	$mail->Send();
	$outcome = 'success';
} catch (phpmailerException $e) {
	echo $e->errorMessage(); // Pretty error messages from PHPMailer
	$outcome = 'failure';
} catch (Exception $e) {
	echo $e->getMessage(); // Boring error messages from anything else!
	$outcome = 'failure';
}

$url = $_SERVER['HTTP_REFERER'].'?envio='.$outcome;
header("Refresh: 0; URL=\"" . $url . "\"");

?>
