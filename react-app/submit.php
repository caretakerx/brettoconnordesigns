<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];

  mail( "mail.brettoconnor@gmail.com", "Brett O'Connor Contact Form",

"Name: \"$name\"\n" .
"From: \"$email\"\n" .
"Phone Number: \"$phone\"\n" .
"Message: \"$message\"\n" .

" ");

  header( "Location: http://www.brettoconnordesigns.com/index-4.html" );
?>
