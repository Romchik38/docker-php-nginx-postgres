<?php

declare(strict_types=1);

$to      = 'nobody1@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example1.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$result = mail($to, $subject, $message, $headers);

if ($result === false) {
    echo 'message not sent';
} else {
    echo 'message sent';
}