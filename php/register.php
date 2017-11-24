<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Peach Games</title>
	 <script type="text/javascript">
      // Form validation code will come here.
      function validateForm()
      { 
        //alert("the validate function has been clicked");
        var nName = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var mailEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var passEx = /^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,8}$/;
        /*
        /^[a-z0-9]+$/i

          ^         start of string
          [a-z0-9]  a or b or c or ... z or 0 or 1 or ... 9
          +         one or more times (change to * to allow empty string
          $         end of string

          /i        case-insensitive
        */
        var userEx = /^[a-z0-9]+$/i;

        //alert("the name is : "+nName);
        //validate name
        if(nName == "")
        {
          document.getElementById("noName").style.display = "inline";
          return false;
        }
        else{
          document.getElementById("noName").style.display = "none";
        }
        
        //validate email address
        if(!(mailEx.test(email))){
          document.getElementById("badEmail").style.display = "inline";
          return false;
        }
        
        else{
          document.getElementById("badEmail").style.display = "none";
        }
        
        //validate username
        if(!(userEx.test(username))){
          document.getElementById("badUname").style.display = "inline";
          return false;
        }
        else{
          document.getElementById("badUname").style.display = "none";
        }
        
        //validate password
        if(!(passEx.test(password))){
          document.getElementById("badPassword").style.display = "inline";
          return false;
        }
        else{
          document.getElementById("badPassword").style.display = "none";
        }
        
        document.getElementById("register").submit();
        return true;
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
						<a class="nav-link" href="../about.html">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../contact.html">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="register.php">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<hr>
	
	<!-- Page Content-->
	<div class="container">
	
	
	<!-- Registration form-->
		<?php if(!empty($message)): ?>
    <span><?= $message ?></span>
    <?php endif; ?>
		<form id="register"  method="POST" action="registerProcessor.php" >
      <div id="noName" style="display:none;"><h2>Please enter your name!</h2></div>
      <input id="name" type="text" name="name" placeholder="Enter Name" maxlength="50" value="" />
      <br>
      <div id="badEmail" style="display:none;"><h2>Please enter a valid email address</h2></div>
      <input id="email" type="text" name="email" placeholder="Enter email" maxlength="50" value="" />
      <br>
      <div id="badUname" style="display:none;"><h2>Please enter a username</h2></div>
      <input id="username" type="text" name="username" placeholder="Enter Username" maxlength="50" value="" />
      <br>
      <div id="badPassword" style="display:none;"><h2>Password should have at least 1 number, one letter and between 6 and 8 characters!</h2></div>
      <input id="password" type="password" name="password" placeholder="Enter password" maxlength="50" value="" />
      <br>
      <button id="submit1" type="submit" name="submit1" onclick="event.preventDefault();validateForm()";>Sign up</button>
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