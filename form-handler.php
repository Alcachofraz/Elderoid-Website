<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'admin@tektonia.com.pt';

$email_subject = 'New Message from a Elderoid User';

$email_body = "User Name: ".$name.
                "\nUser Email: ".$visitor_email.
                "\nSubject: ".$subject.
                "\n\n".$message;

$to = 'elderoid.help@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>