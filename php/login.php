<?php
session_start();
require 'config.php';
$message = '';


if(!empty($_POST['username']) && !empty($_POST['password'])){
  $records = $conn->prepare('SELECT id, username, password FROM user WHERE username = :username');
  $records->bindParam(':username', $_POST['username']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  
  if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
    //die('we have a login');
    $_SESSION['username'] = $results['username'];
    header("Location: index.php");
  }
   else{
    //die('there was an error');
    $message = 'Sorry, your credentials appear to be wrong';
  }
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Peach Games</title>
	<script type="text/javascript">
      function validateForm()
      { 
        //alert("the validate function has been clicked");
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username == "")
        {
          document.getElementById("badUname").style.display = "inline";
          return false;
        }
        else{
          document.getElementById("badUname").style.display = "none";
        }
        if(password == "")
        {
          document.getElementById("badPassword").style.display = "inline";
          return false;
        }
        else{
          document.getElementById("noName").style.display = "none";
        }

      }
    </script>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/stylesheet.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">PEACH GAMES</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="../index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../contact.html">Contact</a>
					</li>
					<li class="nav-item actvive">
						<a class="nav-link" href="php/login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="php/register.php">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<hr>

	<!-- Page Content -->
	<div class="container">
	<?php if(!empty($message)){ ?>
    <span ><?php echo $message; ?></span>
    <?php } ?>	
<!--Login form-->
<form method="post" action="login.php">
	<div id="badUname" style="display:none;">
		<h2>Please enter a username</h2>
	</div>
	<br><input id="username" type="text" name="username" placeholder="Enter Username" maxlength="50" value="" />
	<div id="badPassword" style="display:none;">
		<h2>Password should have at least 1 number, one letter and between 6 and 8 characters!</h2>
	</div>
	<br><input id="password" type="password" name="password" placeholder="Enter password" maxlength="50" value="" />
	<br><button type="login" name="login">Log In</button>
</form>

	</div>
	<!-- Container -->
	
	<hr>

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