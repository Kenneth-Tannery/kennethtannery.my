<?php
  $receiving_email_address = 'tannerykenneth3@gmail.com'; 

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($receiving_email_address, $subject, $email_content, $email_headers)) {
        echo "OK";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
  } else {
    echo "Direct access not allowed.";
  }
?>