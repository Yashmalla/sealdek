<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from = "info@sealdek.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Mailer = "smtp";
$mail->Host= "tls://email-smtp.us-east.amazonaws.com"; // Amazon SES
$mail->Port = 465;  // SMTP Port
$mail->Username = "Amazon SMTP Username";  // SMTP  Username
$mail->Password = "Amazon SMTP Password";  // SMTP Password
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($from,'9lessons Labs');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);

}
?>