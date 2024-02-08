<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'infor@example.com';

$email_subject = 'new form submission';

$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                "user Subject: $subject.\n".
                "user Message: $message.";


$to = 'maharulalam@gmail.com';       

$headers = "From: $email_from\r\n".
$headers .= "Reply-To: $email_from\r\n".

mail($to, $email_subject, $email_body,$headers);

header("location: contact.html");





?>