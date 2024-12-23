<?php
If ($_SERVER[“REQUEST_METHOD”] == “POST”) {
    // Collect the form data
    $name = $_POST[‘name’];
    $number = $_POST[‘number’];
    $email = $_POST[‘email’];
    $enquiry = $_POST[‘enquiry’];

    // Email details
    $to = gyaansingh10vvhs@gmail.com; // Your email address
    $subject = “Enquiry Form Submission”;

    // Create the message
    $message = “Name: $name\n”;
    $message .= “Phone Number: $number\n”;
    $message .= “Email: $email\n”;
    $message .= “Enquiry Regarding: $enquiry\n”;

    // Email headers
    $headers = “From: $email” . “\r\n”;
    $headers .= “Reply-To: $email” . “\r\n”;
    $headers .= “Content-Type: text/plain; charset=UTF-8”;

    // Send the email
    If (mail($to, $subject, $message, $headers)) {
        Echo “Thank you for your enquiry! We will get back to you shortly.”;
    } else {
        Echo “There was an error submitting your enquiry. Please try again later.”;
    }
}
?>


