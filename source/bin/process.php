<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['contact_email'])) && (strlen(trim($_POST['contact_email'])) > 0)) {
	$contact_email = stripslashes(strip_tags($_POST['contact_email']));
} else {$contact_email = 'No email entered';}
if ((isset($_POST['message'])) && (strlen(trim($_POST['message'])) > 0)) {
	$message = stripslashes(strip_tags($_POST['message']));
} else {$message = 'No message entered';}
ob_start();
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeffee">
    <td>Name</td>
    <td><?=$name;?></td>
  </tr>
  <tr bgcolor="#eeeeff">
    <td>Email</td>
    <td><?=$contact_email;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Message</td>
    <td><?=$message;?></td>
  </tr>
</table>
</body>
</html>
<?
$body = ob_get_contents();

require("phpmailer.php");

$mail = new PHPMailer();

$mail->From     = "contactform@hypothes.is";
$mail->FromName = "Contact Form";

if ($_POST['contact'] == 'join') {
  $mail->AddAddress("join@hypothes.is","Hypothes.is");
  $mail->Subject  =  "Join us Form: submitted";
}
elseif ($_POST['contact'] == 'note') {
  $mail->AddAddress("inbox@hypothes.is","Hypothes.is");
  $mail->Subject  =  "Contact Form: submitted";
}

$mail->AddReplyTo($contact_email, $name);
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Body     =  $body;
$mail->AltBody  =  "This is the text-only body";

if(!$mail->Send()) {
	$recipient = 'tilgovi@hypothes.is';
	$subject = 'Contact form failed';
	$content = $body;
  mail($recipient, $subject, $content, "From: mail@hypothes.is\r\nReply-To: $email\r\nX-Mailer: DT_formmail");
  exit;
}
?>
