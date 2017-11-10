
<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
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
  </head>
  <body>
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

     <a href = "login.php">Login here!</a>
      
  </body>
</html>
