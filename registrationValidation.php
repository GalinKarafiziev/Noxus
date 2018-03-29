<?php
require_once 'config.php';
require_once 'classUsers.php';

$repeatedpassword = "";
$error = [];


if($user->isLoggedin()!="")
{
    $user->redirect('index.php');
}

if(isset($_POST['signup']))
{
   if($name=="") {
      $error[] = "provide username !";
   }
   else if($email=="") {
      $error[] = "provide email id !";
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
   }
   else if($password=="") {
      $error[] = "provide password !";
   }
   else if(strlen($password) < 6){
      $error[] = "Password must be atleast 6 characters";
   }
   else if(empty($password)){
     $error[] = "Please, input a password!";
   }
   else if(empty($repeatedpassword)){
     $error[] = "Repeat the password!";
   }
   else if($repeatedpassword != $password){
     $error[] = "Passwords must match";
   }
   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $password = trim($_POST['password']);
   $user->register($name, $password, $email);
      try
      {
         $stmt = $DB_con->prepare("SELECT name, email FROM users WHERE name=:name OR email=:email");
         $stmt->execute(array(':name'=>$name, ':email'=>$email));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);

         if($row['name']==$name) {
            $error[] = "sorry username already taken !";
         }
         else if($row['email']==$email) {
            $error[] = "sorry email id already taken !";
         }
         else
         {
            if($user->register($name,$password,$email))
            {
                $user->redirect('index.php');
            }
         }
     }
     catch(PDOException $ex)
     {
        echo $ex->getMessage();
     }
  }

?>
