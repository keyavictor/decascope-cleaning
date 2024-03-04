<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Perform additional validation if needed

    // Simulate email sending success
    $to = "info@decascope.co.ke";
    $subject = "New Subscription";
    $message = "Email: " . $email;
    $headers = "From: webmaster@decascope.co.ke"; // Change this to your email address

    mail($to, $subject, $message, $headers);

    // Send a response to the client
    echo "success";
} else {
    // Invalid request
    http_response_code(400);
    echo "Invalid request";
}
?>
