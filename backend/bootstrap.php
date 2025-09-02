<?php

require __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set($_ENV['TIMEZONE'] ?? 'Europe/London');

$projectRoot = realpath(dirname(__DIR__));
$dotenv = Dotenv\Dotenv::createImmutable($projectRoot);
$dotenv->load();

function envv(string $key, $default = null) {
    if (isset($_ENV[$key])) return $_ENV[$key];
    if (isset($_SERVER[$key])) return $_SERVER[$key];
    $v = getenv($key);
    return $v !== false ? $v : $default;
}

function h(?string $v): string {
    return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8');
}


?>