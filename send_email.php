<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'ali.elmala22@gmail.com';

  // Set the email subject
  $subject = 'New Form Submission';

  // Set the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Build the email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
        
  } else {
    echo 'Error: Unable to send email.';
  }
}
?>