<?php header('Content-Type: text/html; charset=utf-8');
//if "email" variable is filled out, send email

  
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "testINEA123@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  $headers = 'From: ' . $admin_email . "\r\n" .
             'Reply-To: ' . $email ."\r\n";
  if(mail($admin_email, "$subject", $comment, $headers)){
  print "Email successful";
  }
  else
  {
  print "ERROR";
  }
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>
