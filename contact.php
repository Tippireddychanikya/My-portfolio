<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Set up email
  $to = "tchanu799@gmail.com"; // Replace with your email address
  $headers = "From: $name <$email>";
  $body = "Subject: $subject\n\nName: $name\nEmail: $email\nMessage: $message";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
