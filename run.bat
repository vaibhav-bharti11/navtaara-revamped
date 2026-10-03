@echo off
echo Starting Navtaara Local PHP Development Server...
cd /d "%~dp0navtaara-old-revamped" 2>nul || cd /d "%~dp0"
if exist "C:\xampp\php\php.exe" (
    start http://localhost:8000
    "C:\xampp\php\php.exe" -S 127.0.0.1:8000 router.php
) else (
    where php >nul 2>nul
    if %ERRORLEVEL% equ 0 (
        start http://localhost:8000
        php -S 127.0.0.1:8000 router.php
    ) else (
        echo PHP executable not found. Please ensure XAMPP or PHP is installed.
        pause
    )
)
