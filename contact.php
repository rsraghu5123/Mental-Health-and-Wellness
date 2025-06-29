<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    // Set up the recipient email address
    $to = "your_email@example.com";

    // Set up the email subject
    $subject = "New Query from Contact Form";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Query:\n$query";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Your query has been submitted successfully. We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error submitting your query. Please try again later.";
    }
}
?>
