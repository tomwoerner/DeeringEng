<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@deeringengineering.com"; // Replace with your email address
    $subject = "New Estimate Request";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $projectDetails = htmlspecialchars($_POST['projectDetails']);
    $message = "Name: $name\nEmail: $email\n\nProject Details:\n$projectDetails";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your estimate request has been sent successfully.";
    } else {
        echo "There was an error sending your request. Please try again later.";
    }
}
?>

