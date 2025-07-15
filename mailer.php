<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "amani.izzah@gmail.com";
    $subject = "New Wholesale Inquiry";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Email sent successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Failed to send email.'); window.history.back();</script>";
    }
}
?>