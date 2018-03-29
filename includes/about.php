    <?php
  
  

  $admin_email = "misspho3nixx@gmail.com";
  $email = $_REQUEST['email'];
  $firstname = $_REQUEST['firstname'];
  $questions = $_REQUEST['questions'];
  
 
  mail($admin_email, $firstname, $comment, "From:" . $email);
  
  echo "Thank you for contacting us!";
  
  ?>
  
