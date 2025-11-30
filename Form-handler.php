<?php
$name = $-POST['name'];
$visitor email = $-POST['email'];
$query = $-POST['query'];
$message = $-POST['message'];

$email-form='us@domainname.com';

$subject-form = 'New Form submission'

$email-body = "User Name: $name.\n".
  "User Email: $visitor-email.\n".
   "query: $query.\n".
   "message: $message.\n";

   $to - 'udayd468@gmail.com';

   $header = "From: $email-form \r\n";

   
   $header .= "Reply-To:$visitor-email \r\n";

   mail($to,$email-subject,$email-body,$headers);
   header("Location: CONTACT.html")


?>









