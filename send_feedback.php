<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Your email address (where you want to receive the feedback)
    $to = "ndlelampilwenhle49@gmail.com";

    // Email subject and body
    $subject = "New Feedback from $name";
    $body = "You received a new message from your website feedback form:\n\n"
          . "Name: $name\n"
          . "Email: $email\n"
          . "Message:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your feedback has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again later.</h2>";
    }
}
?>