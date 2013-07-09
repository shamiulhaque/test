<?php 
require("class.phpmailer.php");

$mail = new PHPMailer();  

$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "haque.shamiul@gmail.com";
$mail->Password = "hateme";
$mail->SMTPSecure = 'ssl';

$mail->From     = "haque.shamiul@gmail.com";
$mail->AddAddress("sazib_nipa@yahoo.com");  

$mail->Subject  = "Subject";
$mail->Body     = "Hi!";

if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>