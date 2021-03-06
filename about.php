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
					<li class="nav-item active">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item">
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

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-4">
				<h2>Peach Games</h2>
				<p>Peach Games is an independant game developing company, created by four students studying computing sience at the National College of Ireland in Dublin.</p>
			</div>
			<div class="col-lg-4">
				<h2>AWAKENED</h2>
				<p>AWAKENED was created as part of our third year project and is our first game created as a team, with plans to turn this game into a series of games.</p>
			</div>
			<div class="col-lg-4">
				<h2>Future Plans</h2>
				<p>We plan to turn AWAKENED into a series of games that will display in-game stats to all players. We hope to also expand by hosting other games created by independant game developers.</p>
			</div>
		</div>
		<!-- /.row -->

		<!-- Team Members -->
		<h2>Our Team</h2>

		<div class="row">
			<div class="col-lg-3 mb-3">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/anthony.png" alt="">
					<div class="card-body">
						<h4 class="card-title">Anthony Moore</h4>
						<h6 class="card-subtitle mb-2 text-muted">Team Leader</h6>
						<p class="card-text" id="para">Third year computing student at the National College of Ireland and team leader of Peach Games.</p>
					</div>
					<div class="card-footer">
						<a href="https://www.linkedin.com/in/anthony-moore-394604108" class="btn btn-primary">LinkedIn Profile</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 mb-3">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/jamie.jpg" alt="">
					<div class="card-body">
						<h4 class="card-title">Jamie Joyce</h4>
						<h6 class="card-subtitle mb-2 text-muted">Developer</h6>
						<p class="card-text" id="para">Third year computing student at the National College of Ireland and team leader of Peach Games.</p>
					</div>
					<div class="card-footer">
						<a href="https://www.linkedin.com/in/jamie-joyce-58122290" class="btn btn-primary">LinkedIn Profile</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 mb-3">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/kevin.jpg" alt="">
					<div class="card-body">
						<h4 class="card-title">Kevin Hynes</h4>
						<h6 class="card-subtitle mb-2 text-muted">Developer</h6>
						<p class="card-text" id="para">Third year computing student at the National College of Ireland and team leader of Peach Games.</p>
					</div>
					<div class="card-footer">
						<a href="https://www.linkedin.com/in/kthynes" class="btn btn-primary">LinkedIn Profile</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 mb-3">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/mick.jpg" alt="">
					<div class="card-body">
						<h4 class="card-title">Michael Dunne</h4>
						<h6 class="card-subtitle mb-2 text-muted">Developer</h6>
						<p class="card-text" id="para">Third year computing student at the National College of Ireland and team leader of Peach Games.</p>
					</div>
					<div class="card-footer">
						<a href="https://www.linkedin.com/in/michaeldunne3" class="btn btn-primary">LinkedIn Profile</a>
					</div>
				</div>
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

</body>

</html>