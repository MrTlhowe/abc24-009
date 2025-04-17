<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "thutotlhowe5@gmail.com";
    $subject = "New Feedback Submission";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: "thutotlhowe5@gmail.com"\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback successfully sent!";
    } else {
        echo "Failed to send feedback. Please try again later.";
    }
}
?>

