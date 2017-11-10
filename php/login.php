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
<html>
  <!-- 
  https://www.youtube.com/watch?v=bjT5PJn0Mu8
  http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html -->
  <head>
    <title>Login</title>
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
  </head>
  <body>
    <?php if(!empty($message)){ ?>
    <span ><?php echo $message; ?></span>
    <?php } ?>
    
    <form method = "post" action = "login.php">
      <div id="badUname" style="display:none;"><h2>Please enter a username</h2></div>
      <br><input id="username" type="text" name="username" placeholder="Enter Username" maxlength="50" value="" />
      <div id="badPassword" style="display:none;"><h2>Password should have at least 1 number, one letter and between 6 and 8 characters!</h2></div>
      <br><input id="password" type="password" name="password" placeholder="Enter password" maxlength="50" value="" />
      <br><button type="login" name="login">Log In</button>
    </form>
    <a href = "register.php">Register here!</a>
  </body>
</html>