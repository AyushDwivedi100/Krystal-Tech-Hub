<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        $smtpHost = getenv('SMTP_HOST') ?: 'smtp.gmail.com';
        $smtpUsername = getenv('SMTP_USERNAME') ?: 'krystaltechhub@gmail.com';
        $smtpPassword = getenv('SMTP_PASSWORD') ?: 'wywyktofecayexpu';
        $smtpPort = getenv('SMTP_PORT') ?: 587;
        $receiverEmail = getenv('RECEIVER_EMAIL') ?: 'dharshit265@gmail.com';
        
        if (empty($smtpPassword)) {
            error_log('SMTP password not configured - SMTP_PASSWORD secret is missing');
            throw new Exception('Email service configuration error. Please contact the administrator.');
        }

        $userEmail = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        if (!$userEmail) {
            throw new Exception('Invalid email address provided.');
        }

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $smtpPort;

        // Email setup
        $mail->setFrom($smtpUsername, 'Krystal Tech Hub');
        $mail->addReplyTo($userEmail, htmlspecialchars($_POST['name']));
        $mail->addAddress($receiverEmail);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "<br>
                       <strong>Email:</strong> " . htmlspecialchars($userEmail) . "<br>
                       <strong>Message:</strong><br>" . nl2br(htmlspecialchars($_POST['message']));

        $mail->send();
        echo 'Message sent successfully.';
    } catch (Exception $e) {
        error_log('Contact form error: ' . $e->getMessage() . ' | PHPMailer: ' . $mail->ErrorInfo);
        
        $errorMessage = $e->getMessage();
        if (empty($mail->ErrorInfo)) {
            echo 'Message could not be sent. Error: ' . htmlspecialchars($errorMessage);
        } else {
            echo 'Message could not be sent. Mailer Error: ' . htmlspecialchars($mail->ErrorInfo);
        }
    }
}
?>
