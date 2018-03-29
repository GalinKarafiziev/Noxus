<?php
require_once 'config.php';
require_once 'classUsers.php';

if(!empty($_SESSION['name']))
{
  header('location: index.php');
}

if(isset($_POST['login']))
{
 $name = $_POST['name'];
 $password = $_POST['password'];

if(strlen(trim($name))>1 && strlen(trim($password))>1 )
{
  $stmt = $DB_con->prepare("SELECT * FROM users WHERE name = :name AND password = :password");

  $stmt->execute(array(':name'=>$name, ':password'=>$password));

  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

  if($stmt->rowCount() > 0)
  {
    if(password_verify($password, $userRow['password']))
    {
      $_SESSION['name'] = $userRow['name'];
      header('location: index.php');
    }
    else
    {
      $message = "GB";
    }
 }
}
}
?>
