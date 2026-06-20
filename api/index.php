<?php

set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
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
} catch (Throwable $e) {
    header('Content-Type: text/plain');
    http_response_code(500);
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString();
}
