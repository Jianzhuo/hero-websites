<!DOCTYPE HTML>
<html>
	<head>
		<?php include "include/head.php";?>
	</head>
	<body>

	<div class="herofoods-loader"></div>

	<div id="page" class="inner-nav">
	<?php include "include/navigation.php";?>

	<div class="herofoods-about">
		<img src="images/contact-banner.jpg">
	</div>

	<div id="herofoods-content">
		<div class="container">
			<div class="row animate-box mb-30">
				<div class="col-md-12 blue-text text-center">
					<h3 class="book-title uppercase">Talk To</h3>
					<h1 class="regular-title uppercase">Us</h1>
					<img src="images/fern-icon.png" class="fern-icon mb-30">
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="herofoods-contact-info blue-text">
						<h2 class="uppercase">Get In Touch</h2>
						<p>Office Hours: Monday to Friday 9am - 5pm</p>
						<div class="col-md-1">
							<span class="lnr lnr-map-marker"></span>
						</div>
						<div class="col-md-11">
							<p>8 Kawakawa Place, Whenuapai<br>Auckland 0814<br><b>New Zealand</b></p>
						</div>
						<div class="col-md-1">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="col-md-11">
							<p><a href="mailto:info@herofoods.co.nz">info@herofoods.co.nz</a></p>
						</div>
						<div class="col-md-1">
							<span class="lnr lnr-phone"></span>
						</div>
						<div class="col-md-11">
							<p><a href="tel://0800661199">0800 66 11 99</a></p>
						</div>
						<!--<div class="col-md-12">
			        <ul class="herofoods-social-icons">
			          <li><a href="#"><i class="icon-facebook blue-text"></i></a></li>
			          <li><a href="#"><i class="icon-instagram blue-text"></i></a></li>
			          <li><a href="#"><i class="icon-linkedin blue-text"></i></a></li>
			        </ul>
						</div>-->
					</div>
				</div>
				<div class="col-md-7 animate-box contact-form">
					<form method="post" action="submit_contactform.php" onsubmit="return checkform(this)">
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" name="fname" class="form-control" placeholder="FIRST NAME" required value="" oninvalid="this.setCustomValidity('Please enter your first name')" oninput="setCustomValidity('')">
							</div>
							<div class="col-md-6">
								<input type="text" name="lname" class="form-control" placeholder="LAST NAME" required value="" oninvalid="this.setCustomValidity('Please enter your last name')" oninput="setCustomValidity('')">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" name="cname" class="form-control" placeholder="COMPANY NAME" value="" oninput="setCustomValidity('')">
							</div>
							<div class="col-md-6">
								<input type="text" name="tnumber" class="form-control" placeholder="TELEPHONE NUMBER" required value="" oninvalid="this.setCustomValidity('Please enter your contact number')" oninput="setCustomValidity('')">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS" required value="" oninvalid="this.setCustomValidity('Please enter your email address')" oninput="setCustomValidity('')">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
		            <select class="form-control" name="dropdown" class="form-control" placeholder="Select One" required oninvalid="this.setCustomValidity('Please choose your enquiry type')" oninput="setCustomValidity('')">
		              <option value="" disabled selected>ENQUIRY TYPE</option>
		              <option value="Customer Feedback">Customer Feedback</option>
		              <option value="Wholesaler / Distributor">Wholesaler / Distributor</option>
		              <option value="Supplier">Supplier</option>
		              <option value="Others / General Enquiries">Others / General Enquiries</option>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="enquiry" cols="30" rows="10" class="form-control" placeholder="YOUR ENQUIRY HERE" required oninvalid="this.setCustomValidity('Please enter your message')" oninput="setCustomValidity('')"></textarea>
							</div>
						</div>
						<div class="form-group text-center">
							<input type="submit" value="SUBMIT" class="view-more slide_right" id="submit" >
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<?php include "include/newsletter.php";?>

	<?php include "include/footer.php";?>
	</div>

	<?php include "include/javascript.php";?>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	</body>
</html>
