<?php
require_once "vendor/swiftmailer/lib/swift_required.php";

if($_POST) {
	$name = $_POST["name"];
	$email = $_POST["email"];

	$recipient = "info@herofoods.co.nz";
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject("[$dropdown] Subcribe Newsletter from $name");
	$messagecontent = '
	<div style="width:800px; background-color:#fff; padding:20px; font-family:Tahoma, Helvetica, sans-serif; font-size:14px; text-align:center;">
		<p>
			Detail as below
		</p>
		<table style="text-align:left; border: 1px solid #afafaf; border-collapse: collapse; width:80%;margin:20px auto">
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; width:25%; vertical-align:top;"><strong>Name</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; width:75%; vertical-align:top;">'.$name.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Email</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$email.'</td>
			</tr>
		</table>
	</div>
	<div style="width:800px; font-family:Tahoma, Helvetica, sans-serif; font-size:14px; text-align:center; background: #04223C; color: #ededed; padding:20px;">
		<p style="font-size:12px;">Copyright © 2021 Hero International Trading. All rights Reserved.</p>
	</div>
	';
	$message->setBody($messagecontent, 'text/html');
	$message->setFrom(array($email => $name));
	$message->setTo($recipient);
	$message->setTo($recipient);
	$message->SetBcc(array("cyndi.low@herotrading.co.nz", "ming@herointernational.co.nz"));

	if($mailer->send($message)) {
		echo "<script>alert('Thank You For Subscribing!');document.location='http://www.herofoods.co.nz/index.php'</script>";
	} else {
		echo "<script>alert('Sorry, please try again!');document.location='http://www.herofoods.co.nz/index.php'</script>";
	}
}
?>
