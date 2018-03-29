<!DOCTYPE html>
<html>
<head>
    <?php
    include ('includes/log.php');
    //include ('loginValidation.php');
    require 'loginValidation.php';
    ?>

</head>

<body onload="zoom()">
    <?php
    require 'includes/nav.php';
    ?>

        <h1>Log In</h1>
        <form name="LoginForm" class="regform" onsubmit="return validateForm(this);" method="post">
            <div class="form-group">
                Username: <input type="name" name="name" id="name" value="">
            </div>
            <br>
            <br>
            <div class="form-group">
                Password: <input type="password" name="password" id="pass" value="">
            </div>
            <br>
            <br>
            <p id="msgpass" class="msgp"></p>
            <br>
            <input class="btnreg" type="submit" name="login" value="Submit"><a>Log In</a></button><br>

        </form>

</body>

</html>
