<? php session_start(); ?>
<?php

$_SESSION['name']= null;
$_SESSION['email']=null;
header("Location:index.php");

?>