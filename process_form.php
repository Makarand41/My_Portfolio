<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "makarandpatil67@gmail.com";

    // Create the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Build the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Message:\n$message";

    // Set headers
    $headers = "From: $email";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);
}
?>
