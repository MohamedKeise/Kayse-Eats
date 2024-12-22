<!-- password_recovery.php -->
<?php
include("../connection/connect.php");
error_reporting(0);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Add your logic here to check if the email exists in the database
    // If it does, generate a unique token, save it in the database, and send a password reset link to the user's email

    // Example:
    $resetToken = bin2hex(random_bytes(16));

    // Save the token in the database for the user with the provided email
    // Use a table column like 'reset_token' and store the token along with a timestamp

    // Send an email to the user with a link to reset their password, including the resetToken in the link
    $resetLink = "http://yourwebsite.com/reset_password.php?token=$resetToken";
    mail($email, "Password Reset", "Click the following link to reset your password: $resetLink");
    
    echo "<script>alert('Password reset link has been sent to your email.');</script>";
}
?>
