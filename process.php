<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "yimeng.yu@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From: $name <$email>");

    header('Location: https://littlefish-tech.github.io/mywebsite.github.io/');
  }

?>
