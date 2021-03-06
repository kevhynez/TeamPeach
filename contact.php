<?php
session_start();
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Peach Games</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/stylesheet.css" rel="stylesheet">
	
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php">PEACH GAMES</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="register.php">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<hr>

	<!-- Page Content -->
	<div class="container">

		<!-- Content Row -->
		<div class="row">
			<!-- Map Column -->
			<div class="col-lg-8 mb-4">
				<!-- Embedded Google Map -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2381.6922260294473!2d-6.244521503318793!3d53.34876539887549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d51b774ee7fa935!2sNational+College+of+Ireland!5e0!3m2!1sen!2sus!4v1512576972615" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- Contact Details Column -->
			<div class="col-lg-4 mb-4">
				<h3>Contact Details</h3>
				<p>
					National College of Ireland
					<br>Mayor Square, Dublin 1
					<br>
				</p>
				<p>
					<abbr title="Phone">Contact Number</abbr>: +353 86 2389199
				</p>
				<p>
					<abbr title="Email">Email</abbr>:
					<a href="anthonymoore1991@gmail.com">info@peachgames.com
            </a>
				</p>
				<p>
					<abbr title="Hours">Hours</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
				</p>
			</div>
		</div>
		<!-- /.row -->

		<!-- Contact Form -->
		<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
		<div class="row">
			<div class="col-lg-8 mb-4">
				<h3>Send us a Message</h3>
				<form name="sentMessage" id="contactForm" method="POST" action="contact_me.php" novalidate>
					<div class="control-group form-group">
						<div class="controls">
							<label>Full Name:</label>
							<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Phone Number:</label>
							<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Address:</label>
							<input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Message:</label>
							<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
				</form>
			</div>

		</div>
		<!-- /.row -->

		<hr>

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; PEACH GAMES 2017</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Contact form JavaScript -->
	<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>
</body>

</html>
