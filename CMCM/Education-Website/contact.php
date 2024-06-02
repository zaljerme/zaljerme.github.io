<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    $to = 'zaidaljerme@student.csd509j.net';
    $subject = 'Feedback from Website';
    $body = "Email: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your feedback!';
    } else {
        echo 'Sorry, there was an error sending your feedback. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>
