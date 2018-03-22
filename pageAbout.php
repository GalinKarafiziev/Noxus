<!DOCTYPE html>
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
    
<div id="container">
    <div   >
        <img src = "img/ahri%201.png" alt="ahri" class="img6">
    </div>
        
    <div >
    
        <img src="img/ahri%203.png" alt="ahri"  class="img5">
    </div>
        
    <center><div >
        <img src="img/ahri%202.png" alt="ahri" class="img4" >
    </div></center>
    
    </div>
    <br>
<div id="container">
    <div  class="divtext1" >
        <p>Welcome to BattleZone! The purpose of this website is to make it easier for you to get tickets for the events of the games you love. </p>
    </div>
        
    <div class="divtext2">
    <p>If you have more questions please submit them in the form down below! </p>
       
    </div>
        
    <center><div class="divtext3">
        <p> BattleZone will show you all the gaming events located in Europe. Details, like hour, city, price etc. will be included.</p>
        
    </div></center>
    
    </div>
    <br>
    <br>
    <center> <form class="regform">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
         <br>
        <br>

    <label for="lname">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your e-mail..">
         <br>
        <br>   
     
    <textarea rows="10" cols="150" name="questions" placeholder="Your question.."></textarea>
         <br>
        <br>
  
    <input type="submit" value="Submit">
  </form>
    </center>
    
</body>
</html>