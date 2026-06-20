<?php

if (getenv('VERCEL') || getenv('NOW_REGION')) {
    putenv('APP_ENV=production');
    putenv('APP_DEBUG=false');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=array');
    putenv('CACHE_STORE=array');

    $dirs = [
        '/tmp/storage/app',
        '/tmp/storage/app/private',
        '/tmp/storage/app/public',
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/testing',
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
