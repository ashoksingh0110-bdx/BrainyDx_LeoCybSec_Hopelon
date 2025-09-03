<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

function emailHeader(): string {
    return '
        <div style="background-color:#26213f; padding:20px; text-align:center;">
            <img src="https://hoplon-ai.com/marketing/assets/images/logo.png" alt="Logo" style="max-width:150px; height:auto;">
        </div>
    ';
}

function emailTable(array $rows): string {
    $html = '<table cellpadding="8" cellspacing="0" border="0" style="border-collapse:collapse; width:100%; font-family:Arial,sans-serif; font-size:14px; color:#333;">';
    foreach ($rows as $label => $value) {
        $html .= '
            <tr>
                <td style="background:#f4f4f4; font-weight:bold; width:150px; border:1px solid #ddd;">' . h($label) . '</td>
                <td style="border:1px solid #ddd;">' . nl2br(h($value)) . '</td>
            </tr>';
    }
    $html .= '</table>';
    return $html;
}

function adminBody(array $data): string {
    $ts = date('d-M-Y h:i A');
    $rows = [
        'Name'    => $data['name'] ?? '-',
        'Email'   => $data['email'] ?? '-',
        'Phone'   => $data['phone'] ?? '-',
        'Message' => $data['message'] ?? '-',
    ];

    return emailHeader() . '
        <div style="padding:20px; font-family:Arial,sans-serif; font-size:14px; color:#333;">
            <p>Hi Admin,</p>
            <p>You have a new enquiry:</p>
            ' . emailTable($rows) . '
            <p><small>Sent at ' . $ts . '</small></p>
        </div>
    ';
}

function userBody(array $data): string {
    $ts = date('d-M-Y h:i A');
    $brand = h(envv('FROM_NAME', 'Team'));
    $rows = [
        'Name'    => $data['name'] ?? '-',
        'Email'   => $data['email'] ?? '-',
    ];

    if (!empty($data['phone'])) {
        $rows['Phone'] = $data['phone'];
    }

    $rows['Message'] = $data['message'] ?? '-';

    return emailHeader() . '
        <div style="padding:20px; font-family:Arial,sans-serif; font-size:14px; color:#333;">
            <p>Hi ' . h($data['name'] ?? 'there') . ',</p>
            <p>Thanks for contacting ' . $brand . '. We\'ve received your message and will get back to you shortly.</p>
            <p><strong>Your submission</strong></p>
            ' . emailTable($rows) . '
            <p>If you didn\'t make this request, please ignore this email.</p>
            <p>— ' . $brand . '</p>
            <p><small>Sent at ' . $ts . '</small></p>
        </div>
    ';
}


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
