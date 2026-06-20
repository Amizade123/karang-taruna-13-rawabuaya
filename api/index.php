<?php

if (($_SERVER['REQUEST_URI'] ?? '') === '/__debug') {
    header('Content-Type: text/plain');
    echo "=== Vercel Debug ===\n\n";
    echo "PHP Version: " . phpversion() . "\n";
    echo "VERCEL: " . (getenv('VERCEL') ?: 'not set') . "\n";
    echo "NOW_REGION: " . (getenv('NOW_REGION') ?: 'not set') . "\n";
    echo "APP_KEY: " . (getenv('APP_KEY') ? 'set' : 'not set') . "\n";
    echo "APP_ENV: " . (getenv('APP_ENV') ?: 'not set') . "\n";
    echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'not set') . "\n";
    echo "Script Filename: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'not set') . "\n";
    echo "\n=== Extensions ===\n";
    echo implode(', ', get_loaded_extensions()) . "\n";
    echo "\n=== Directories ===\n";
    echo "vendor/autoload.php exists: " . (file_exists(__DIR__ . '/../vendor/autoload.php') ? 'YES' : 'NO') . "\n";
    echo "storage exists: " . (is_dir(__DIR__ . '/../storage') ? 'YES' : 'NO') . "\n";
    echo "storage writable: " . (is_writable(__DIR__ . '/../storage') ? 'YES' : 'NO') . "\n";
    echo "/tmp writable: " . (is_writable('/tmp') ? 'YES' : 'NO') . "\n";
    echo "bootstrap/cache/config.php exists: " . (file_exists(__DIR__ . '/../bootstrap/cache/config.php') ? 'YES' : 'NO') . "\n";
    echo "bootstrap/cache/packages.php exists: " . (file_exists(__DIR__ . '/../bootstrap/cache/packages.php') ? 'YES' : 'NO') . "\n";
    exit;
}

if (getenv('VERCEL') || getenv('NOW_REGION')) {
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=false');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=array');
    putenv('CACHE_DRIVER=array');

    $dirs = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/logs',
    ];
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
}

require __DIR__ . '/../public/index.php';
