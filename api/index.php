<?php

if (getenv('VERCEL') || getenv('NOW_REGION')) {
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=false');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=array');
    putenv('CACHE_STORE=array');

    $dirs = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/logs',
    ];
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

    // Force APP_KEY if not available from env
    $key = getenv('APP_KEY');
    if (!$key) {
        putenv('APP_KEY=base64:6wUneeeyxhXw6nNgr5g4qOauPrJZYnZ0h31r9TlrO1I=');
    }
}

require __DIR__ . '/../public/index.php';
