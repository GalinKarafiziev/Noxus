<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['name'])){
   header("Location: formLogIn.php");
}
?>
<html>
<head>
   <?php
    require 'includes/head.php';
    ?>
</head>
<body onload="zoom()">
<?php
    require 'includes/nav.php';
    ?>


<div>
<h2>Profile information:</h2>

<div align = "left">
<img src = "img/img_avatar.png" alt="ahri" class="img10">
</div>
    
    
<div align="right" class="divntext">
<h2>Username: </h2>
<h2>E-mail: </h2>
<h2>Telephone: </h2>
</div>
    </div>
        
    <div class="divhis">
    <h2>History of Events:</h2>
    </div>
   <img src="img/angry.png" alt="no" class="aimg">
<h2 class="nv">No events available yet!</h2>

 <button id="LogOut" class="btnreg" ><a href="formLogOut.php">Log out</a></button>   
</body>
</html>