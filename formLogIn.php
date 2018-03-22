<!DOCTYPE html>
<html>


<head>
    <?php
    require 'includes/log.php';
    ?>
</head>

<body onload="zoom()">
    <?php
    require 'includes/nav.php';
    ?>
        <h1>Log In</h1>
        <form name="LoginForm" class="regform" onsubmit="return validateForm(this);" method="post">
            Username: <input type="text" name="name" /><br>
            <br> Password: <input type="password" name="password" id="pass"><br>
            <br>





            <p id="msgpass" class="msgp"></p>
            <br>
            <button class="btnreg" input type="submit" name="log in"><a>Log In</a></button><br>

        </form>

</body>

</html>
