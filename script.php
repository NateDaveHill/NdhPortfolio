<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'config.php';

function sendMail($email, $subject, $message, $name)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->SMTPAuth = true;

    $mail->Host = MAILHOST;

    $mail->Username = USERNAME;

    $mail->Password = PASSWORD;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;

    $mail->setFrom($email, $name);

    $mail->addAddress(USERNAME);

    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $message;

    $mail->AltBody = $message;

    if (!$mail->send()) {
        return "Email not send. Please try again.";
    } else {
        return "Email was sent successfully.";
    }
}
