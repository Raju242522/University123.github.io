<?php>
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$eamil_from = 'info@uviversty.com';
$email_subject = 'New from Submission';
$email_body = "user name: $name.\n"
              "user email: $visitor_email\n".
              "subject: $subject.\n "
              "user message: $message.\n";


$to ='avinash6252@gmail.com';

$headers = "from: $email_from \r\n";

$headers  ="Reply_to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact: html");
?>

