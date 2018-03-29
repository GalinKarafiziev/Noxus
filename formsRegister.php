<!DOCTYPE html>
<html>

<head>
    <?php
    require 'includes/head.php';
    require 'registrationValidation.php';
    ?>
</head>

<body onload="zoom()">
    <?php
    require 'includes/nav.php';
    ?>
        <h1>Sign in:</h1>
        <form name="SignupForm" class="regform" onsubmit="return validateForm(this);" action="registrationValidation.php" method="post">
          <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert">
                      <i class="warning"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php
               }
            }
            else if(isset($_GET['joined']))
            {
                 ?>
                 <div class="alert">
                      <i class="log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
            }
            ?>
            <div class="form-group">
                Email: <input type="text" name="email" id="email" value="">
            </div>
            <br>
            <br>
            <div class="form-group">
                Username: <input type="text" name="name" value="">
            </div>
            <br>
            <br>
            <div class="form-group">
                Password: <input type="password" name="password" id="pass" value="">
            </div>
            <br>
            <br>
            <div class="form-group">
                Repeat Password: <input type="password" name="repeatedpassword" id="pass2" value="">
            </div>
            <br>
            <br>
            <p id="msgpass" class="msgp"></p>
            <input class="btnreg" type="submit" name="signup" value="Submit">

        </form>
</body>

</html>
