<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

/* ---------- Bootstrap ---------- */
$projectRoot = realpath(dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createImmutable($projectRoot);
$dotenv->load();

date_default_timezone_set($_ENV['TIMEZONE'] ?? 'Europe/London');

/* ---------- Helpers ---------- */
function envv(string $key, $default = null) {
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    $v = getenv($key);
    return $v !== false ? $v : $default;
}
function h(?string $v): string {
    return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8');
}

/* ---------- Mail Core ---------- */
function createMailer(): PHPMailer {
    $m = new PHPMailer(true);
    $m->isSMTP();
    $m->Host       = envv('SMTP_HOST', 'smtp.gmail.com');
    $m->SMTPAuth   = true;
    $m->Username   = envv('EMAIL_USERNAME');
    $m->Password   = envv('EMAIL_PASSWORD');
    $m->SMTPSecure = envv('SMTP_SECURE', 'ssl');
    $m->Port       = (int) envv('SMTP_PORT', 465);
    $m->isHTML(true);
    $m->CharSet = 'UTF-8';
    return $m;
}

function sendMail(string $toEmail, string $toName, string $subject, string $html, string $alt = '', ?string $replyToEmail = null, ?string $replyToName = null): bool {
    $mail = createMailer();
    $mail->setFrom(envv('FROM_EMAIL'), envv('FROM_NAME'));
    $mail->addAddress($toEmail, $toName);
    if ($replyToEmail) $mail->addReplyTo($replyToEmail, $replyToName ?? $replyToEmail);
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->AltBody = $alt ?: trim(strip_tags($html));
    try {
        return $mail->send();
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
        return false;
    }
}

/* ---------- Templating ---------- */
function adminBody(array $data): string {
    $ts = date('d-M-Y h:i A');
    return '
        <p>Hi Admin,</p>
        <p>You have a new enquiry:</p>
        <table cellpadding="6" cellspacing="0" border="0" style="border-collapse:collapse;">
          <tr><td><strong>Name</strong></td><td>' . h($data['name'] ?? '-') . '</td></tr>
          <tr><td><strong>Email</strong></td><td>' . h($data['email'] ?? '-') . '</td></tr>
          <tr><td><strong>Phone</strong></td><td>' . h($data['phone'] ?? '-') . '</td></tr>
          <tr><td style="vertical-align:top;"><strong>Message</strong></td><td>' . nl2br(h($data['message'] ?? '-')) . '</td></tr>
        </table>
        <p><small>Sent at ' . $ts . '</small></p>
    ';
}

function userBody(array $data): string {
    $ts = date('d-M-Y h:i A');
    $brand = h(envv('FROM_NAME', 'Team'));
    return '
        <p>Hi ' . h($data['name'] ?? 'there') . ',</p>
        <p>Thanks for contacting ' . $brand . '. We\'ve received your message and will get back to you shortly.</p>
        <p><strong>Your submission</strong></p>
        <table cellpadding="6" cellspacing="0" border="0" style="border-collapse:collapse;">
          <tr><td><strong>Name</strong></td><td>' . h($data['name'] ?? '-') . '</td></tr>
          <tr><td><strong>Email</strong></td><td>' . h($data['email'] ?? '-') . '</td></tr>
          ' . ((isset($data['phone']) && $data['phone'] !== '') ? '<tr><td><strong>Phone</strong></td><td>' . h($data['phone']) . '</td></tr>' : '') . '
          <tr><td style="vertical-align:top;"><strong>Message</strong></td><td>' . nl2br(h($data['message'] ?? '-')) . '</td></tr>
        </table>
        <p>If you didn\'t make this request, please ignore this email.</p>
        <p>— ' . $brand . '</p>
        <p><small>Sent at ' . $ts . '</small></p>
    ';
}

/* ---------- Public APIs ---------- */
function adminEmail(array $data): bool {
    $subject = 'New Contact Form Query';
    $html = adminBody($data);
    // reply-to set to the user's email so admin can reply directly
    $replyTo = $data['email'] ?? null;
    return sendMail(
        envv('ADMIN_EMAIL'),
        'Admin',
        $subject,
        $html,
        '',
        $replyTo,
        $data['name'] ?? $replyTo
    );
}

function userEmail(array $data): bool {
    $userEmail = trim((string)($data['email'] ?? ''));
    if ($userEmail === '') return false;
    $subject = 'We received your message';
    $html = userBody($data);
    // reply-to set to the official inbox
    return sendMail(
        $userEmail,
        $data['name'] ?? '',
        $subject,
        $html,
        '',
        envv('FROM_EMAIL'),
        envv('FROM_NAME')
    );
}
