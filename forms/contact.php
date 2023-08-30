<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $receiving_email_address = 'amalut9@gmail.com';
      
      $sender_name = $_POST['name'];
      $sender_email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
      $headers = "From: $sender_name <$sender_email>\r\n";
      $headers .= "Reply-To: $sender_email\r\n";
      
      $mail_subject = "New Contact Form Submission: $subject";
      $mail_body = "Name: $sender_name\n";
      $mail_body .= "Email: $sender_email\n";
      $mail_body .= "Subject: $subject\n";
      $mail_body .= "Message:\n$message";
      
      if (mail($receiving_email_address, $mail_subject, $mail_body, $headers)) {
          echo 'success';
      } else {
          echo 'error';
      }
  } else {
    echo 'Invalid request method.';
}?>
