<?php
include_once 'config.php';
class User
{
  private $db;
  public function __construct($DB_con)
    {
      $this->db = $DB_con;
    }

  public function register($name,$password,$email)
  {
    try
    {


      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users(name, password, email) VALUES(:name, :password, :email)";
      $stmt = $this->db->prepare($sql);

      $stmt->bindparam(':name', $name);
      $stmt->bindparam(':password', $hashed_password);
      $stmt->bindparam(':email', $email);

      $stmt->execute();
      header("Location: index.php");
      return $stmt;
    }
    catch(PDOException $ex)
    {
      echo $ex->getMessage();
    }
  }

  public function login($name,$password)
  {
    try
    {
      $stmt = $this->db->prepare("SELECT * FROM users WHERE name = :name AND password = :password");

      $stmt->execute(array(':name'=>$name, ':password'=>$password));

      $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

      if($stmt->rowCount() > 0)
      {
        if(password_verify($password, $userRow['password']))
        {
          $_SESSION['session'] = $userRow['id'];
          return true;
        }
        else
        {
          return false;
        }
      }
    }
    catch (PDOException $ex)
    {
      echo $ex->getMessage();
    }

  }

  public function isLoggedin()
  {
    if(isset($_SESSION['session']))
      {
         return true;
      }
  }

  public function redirect($url)
  {
    header("Location: $url");
  }

  public function isLoggedOut()
  {
    session_destroy();

    unset($_SESSION['session']);

    return true;

  }





}





?>
