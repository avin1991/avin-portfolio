<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "avinwebdev"; // 👈 इथे तुमचा Email टाका
    $subject = "New Contact Form Submission";

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $subject_input = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $body = "
        <h2>New Message from Website</h2>
        <p><strong>Name:</strong> $fullname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mobile:</strong> $mobile</p>
        <p><strong>Subject:</strong> $subject_input</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $fullname <$email>" . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='success-message'>Message sent successfully!</p>";
    } else {
        echo "<p class='success-message' style='color:red;'>Message sending failed. Please try again.</p>";
    }
}
?>
