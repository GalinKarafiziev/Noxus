<!DOCTYPE html>
<html>

<head>
    <?php
    require 'includes/reg.php';
    ?>

</head>

<body onload="zoom()">
     <?php
    require 'includes/nav.php';
    ?>
    <h1>Sign in:</h1>
    <form name="SignupForm" class="regform" onsubmit="return validateForm(this);">
        Email: <input type="text" name="email" id="email"><br>
        <br> Username: <input type="text" name="name"><br>
        <br> Password: <input type="password" name="password" id="pass"><br>
        <br> Repeat Password: <input type="password" name="repeatedpassword" id="pass2"><br>
        <br>
        <p id="msgpass" class="msgp"></p>
        <button class="btnreg" input type="submit" name="sign up"><a>Sign up</a></button><br>
        <br>

    </form>
</body>

</html>
