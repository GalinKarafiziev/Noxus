<?php
//database connection
session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_password = "";
$DB_name = "battlezone";
$DB_con;

try
{
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_password);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
  echo $ex->getMessage();
}

include_once 'classUsers.php';
$user = new User($DB_con);



?>
