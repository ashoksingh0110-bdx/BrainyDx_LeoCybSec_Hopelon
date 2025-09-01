<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

/**
 * Read env vars from $_ENV / getenv / $_SERVER with a default
 */
function env(string $key, $default = null) {
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    $v = getenv($key);
    return $v !== false ? $v : $default;
}

/**
 * Load .env from project root (one level above /backend)
 * Path resolves to: C:\wamp64\www\BrainyDX\CorePHP\Leo_CybSec
 */
$projectRoot = realpath(dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createImmutable($projectRoot);
$dotenv->load(); // throws if .env missing syntax; guarantees $_ENV is filled

// Validate required keys early (fail fast with a clear message)
$required = [
    'EMAIL_USERNAME','EMAIL_PASSWORD','SMTP_HOST','SMTP_PORT',
    'SMTP_SECURE','FROM_EMAIL','FROM_NAME','ADMIN_EMAIL'
];
foreach ($required as $k) {
    if (env($k) === null || env($k) === '') {
        // Don’t reveal secrets; just name the missing key
        throw new RuntimeException("Missing environment variable: {$k}. Check your .env at {$projectRoot}\\.env");
    }
}

function adminEmail($data) {
   
    date_default_timezone_set($_ENV['TIMEZONE'] ?? 'Europe/London');

    $timestamp = date('d-M-Y h:i:A');

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        
        $mail->Host       = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['EMAIL_USERNAME'];
        $mail->Password   = $_ENV['EMAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE']; 
        $mail->Port       = (int) $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['FROM_EMAIL'], $_ENV['FROM_NAME']);
        $mail->addAddress($_ENV['ADMIN_EMAIL']);

        $mail->isHTML(true);
        $mail->Subject = "Hoplon AI | New Contact Form Query";
        $mail->Body = "
            <p>Hi Admin,</p>
            <p>Someone has submitted the contact form on the Marketing page!</p>
            <p>
                <strong>Name:</strong> {$data['name']}<br>
                <strong>Phone:</strong> {$data['phone']}<br>
                <strong>Email:</strong> {$data['email']}<br>
                <strong>Message:</strong> {$data['message']}<br>
                <strong>Timestamp:</strong> {$timestamp}<br>
            </p>
        ";

        try {
            $mail->send();
            echo "<br>Email sent<br>";
        } catch (Exception $e) {
            echo "Mailer Error: {$mail->ErrorInfo}<br>";
        }

        $mail->clearAddresses();
    } catch (Exception $e) {
        echo "Mailer setup error: {$mail->ErrorInfo}";
    }
}


// function userEmail($data) {

//     date_default_timezone_set('Asia/Kolkata');

//     $timestamp = date('d-M-Y h:i:A');

//     $mail = new PHPMailer(true);

//     try {
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = $credentials['EMAIL_USERNAME'];
//         $mail->Password = $credentials['EMAIL_PASSWORD'];
//         $mail->SMTPSecure = 'ssl';
//         $mail->Port = 465;

//         $mail->setFrom($credentials['EMAIL_USERNAME'], 'The BOB Project');

//         $mail->addAddress($data['email']);
//         $mail->isHTML(true);
//         $mail->Subject = "Hoplon AI | Thank you for contacting us";
//         $mail->Body = "
//             <p>Hi Admin,</p>
//             <p>Someone has submitted the contact form on the Marketing page!</p>
//             <p>
//                 <strong>Name:</strong> {$data['name']}<br>
//                 <strong>Phone:</strong> {$data['phone']}<br>
//                 <strong>Email:</strong> {$data['email']}<br>
//                 <strong>Message:</strong> {$data['message']}<br>
//                 <strong>Timestamp:</strong> {$timestamp}<br>
//             </p>
//         ";

//         try {
//             $mail->send();
//             echo "<br>Email sent<br>";
//         } catch (Exception $e) {
//             echo "Mailer Error: {$mail->ErrorInfo}<br>";
//         }

//         $mail->clearAddresses();
//     } catch (Exception $e) {
//         echo "Mailer setup error: {$mail->ErrorInfo}";
//     }
// }