<?php
error_reporting(0);


  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "arvind.vashisat121@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "alert('Thank you for contacting us!')";
  header('Refresh: 10; URL=http://bhumikapublication.com/');
  }
  ?>
	 