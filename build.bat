@echo off
echo Building static site...

echo 1. Building assets (Vite)...
call npm run build
if %errorlevel% neq 0 exit /b %errorlevel%

echo 2. Generating static HTML...
php artisan static:generate
if %errorlevel% neq 0 exit /b %errorlevel%

echo ✅ Static site generated in dist/
echo Run: npx vercel deploy --prod