<?php
include "inc/app-top.php";
require_once "swiftmailer/lib/swift_required.php";

if($_POST) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$about = $_POST["about"];
	$enquiry = $_POST["enquiry"];

	$recipient = "cyndi.low@hifresh.co.nz";
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject("Enquiry from ".$name);
	$messagecontent = '
	<p style="font-family:Arial, Helvetica, sans-serif; font-size:15px;">
	  Enquiry from '.$name.'<br>
	  Detail as below:
	</p>
	<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">
	  <tr>
		<td><strong>Name</strong></td>
		<td>:</td>
		<td>'.$name.'</td>
	  </tr>
	  <tr>
		<td><strong>Email</strong></td>
		<td>:</td>
		<td>'.$email.'</td>
	  </tr>
	  <tr>
		<td><strong>About</strong></td>
		<td>:</td>
		<td>'.$about.'</td>
	  </tr>
	  <tr>
		<td><strong>Message</strong></td>
		<td>:</td>
		<td>'.nl2br($enquiry).'</td>
	  </tr>
	</table>
	';
	$message->setBody($messagecontent, 'text/html');
	$message->setFrom(array($email => $name));
	$message->setTo($recipient);

	if($mailer->send($message)) {
		echo "<script>alert('Thank you! We will get in touch with you as soon as possible.');document.location='index.php'</script>";
	} else {
		echo "Failed, please try again!" ;
	}
}
?>
