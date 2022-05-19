<?php
require_once "vendor/swiftmailer/lib/swift_required.php";

if($_POST) {
	$name = $_POST["name"];
	$company = $_POST["company"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$dropdown = $_POST["dropdown"];
	$enquiry = $_POST["enquiry"];

	$recipient = "sales@herointernational.co.nz";
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject("[$dropdown] Enquiry from $name");
	$messagecontent = '
	<div style="width:800px; background-color:#ededed; padding:20px; font-family:Tahoma, Helvetica, sans-serif; font-size:14px; text-align:center;">
		<img src="http://www.nzwagyu.co.nz/staging/images/logo-gold.png" style="width:200px;">
		<p>
			NZ Wagyu enquiry from '.$name.'<br>
			Detail as below
		</p>
		<table style="text-align:left; border: 1px solid #afafaf; border-collapse: collapse; width:80%;margin:20px auto">
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; width:25%; vertical-align:top;"><strong>Name</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; width:75%; vertical-align:top;">'.$name.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Company Name</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$company.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Email</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$email.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Phone</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$phone.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Enquiry Type</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$dropdown.'</td>
			</tr>
			<tr>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;"><strong>Message</strong></td>
				<td style="border:1px solid #afafaf; padding:10px; vertical-align:top;">'.$enquiry.'</td>
			</tr>
		</table>
	</div>
	<div style="width:800px; font-family:Tahoma, Helvetica, sans-serif; font-size:14px; text-align:center; background: #2f2f2f; color: #c1a788; padding:20px;">
		<p style="font-size:12px;">Copyright © 2021 HERO INTERNATIONAL TRADING. All rights Reserved.</p>
	</div>
	';
	$message->setBody($messagecontent, 'text/html');
	$message->setFrom(array($email => $name));
	$message->setTo($recipient);
	$message->setTo($recipient);
	$message->SetBcc(array("cyndi.low@hifresh.co.nz"));

	if($mailer->send($message)) {
		echo "<script>alert('Thank you for your message! Our team will get in touch with you shortly.');document.location='index.php'</script>";
	} else {
		echo "Sorry, please try again!" ;
	}
}
?>
