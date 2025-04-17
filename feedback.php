<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email.
    $to = "thutotlhowe5@gmail.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback successfully sent!";
    } else {
        echo "Failed to send feedback. Please try again later.";
    }
}
?>
