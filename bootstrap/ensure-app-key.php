<?php

/**
 * First-boot helper for hosts that copied .env.example and never ran key:generate.
 * Writes APP_KEY only when it is missing. Does not rotate an existing key.
 */
$envFile = dirname(__DIR__).DIRECTORY_SEPARATOR.'.env';
$configCache = __DIR__.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'config.php';

if (! is_file($envFile) || ! is_readable($envFile) || ! is_writable($envFile)) {
    return;
}

$contents = file_get_contents($envFile);

if ($contents === false || preg_match('/^APP_KEY=base64:[A-Za-z0-9+\/=]+/m', $contents) === 1) {
    return;
}

$key = 'base64:'.base64_encode(random_bytes(32));

if (preg_match('/^APP_KEY=.*$/m', $contents) === 1) {
    $updated = preg_replace('/^APP_KEY=.*$/m', 'APP_KEY='.$key, $contents, 1);
} else {
    $updated = rtrim($contents, "\r\n")."\nAPP_KEY=".$key."\n";
}

if (! is_string($updated) || file_put_contents($envFile, $updated, LOCK_EX) === false) {
    return;
}

if (is_file($configCache)) {
    unlink($configCache);
}
