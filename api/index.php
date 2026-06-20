<?php

header('Content-Type: text/plain');
echo "VERCEL: " . (getenv('VERCEL') ?: 'NOT SET') . "\n";
echo "NOW_REGION: " . (getenv('NOW_REGION') ?: 'NOT SET') . "\n";
echo "APP_KEY: " . (getenv('APP_KEY') ?: 'NOT SET') . "\n";
echo "APP_ENV: " . (getenv('APP_ENV') ?: 'NOT SET') . "\n";
echo "PHP version: " . phpversion() . "\n";

echo "\n--- All env vars ---\n";
print_r(getenv());
