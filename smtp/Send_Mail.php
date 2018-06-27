<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "csebsection2015@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "tls://smtp.gmail.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "csebsection2015.gmrit@gmail.com";  // SMTP  username
$mail->Password   = "CSEBsection";  // SMTP password
$mail->SetFrom($from, 'GSG');
$mail->AddReplyTo($from,'GSG');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
