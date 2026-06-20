<?php

header('Content-Type: text/plain');

try {
    // Step 1: Setup
    echo "1. Setup\n";
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
        echo "   Storage dirs created\n";
    }

    // Step 2: Load autoloader
    echo "2. Loading autoloader\n";
    require __DIR__ . '/../vendor/autoload.php';
    echo "   Autoloader loaded\n";

    // Step 3: Bootstrap app manually
    echo "3. Bootstrapping app\n";
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    echo "   App bootstrapped\n";
    echo "   Storage path: " . $app->storagePath() . "\n";
    
    // Step 4: Handle request
    echo "4. Handling request\n";
    $response = $app->handleRequest(Illuminate\Http\Request::capture());
    echo "   Response status: " . $response->getStatusCode() . "\n";

} catch (Throwable $e) {
    echo "\nERROR: " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "CLASS: " . get_class($e) . "\n";
    echo "TRACE:\n" . $e->getTraceAsString() . "\n";
}
