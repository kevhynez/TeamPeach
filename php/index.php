<?php
session_start();
require 'config.php';

?>
<html>
  <head>
    <title>home</title>
  </head>
  <body>
    <h1>
      Welcome!!
    </h1>
    
    <?php if(isset($_SESSION['username'])): ?>
    
    <p>You are successfully logged in!</p>
    
    <a href="logout.php">Logout?</a>
    
    <?php else: ?>
    <h1>
      Please login or register!
    </h1>
    <p>
      <a href="register.php">Register here!</a>
      | <a href="login.php">Login here!</a>
    </p>
    <?php endif; ?>
  </body>
</html>