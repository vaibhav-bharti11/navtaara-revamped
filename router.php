<?php
/**
 * Built-in PHP Development Server Router
 * Handles static files and clean URL routing matching .htaccess rules
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve existing static files directly (CSS, JS, images, fonts, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Serve root path
if ($uri === '/' || $uri === '') {
    if (file_exists(__DIR__ . '/index.php')) {
        include __DIR__ . '/index.php';
        return true;
    }
}

// Rewrite clean URLs without .php extension (e.g. /about-us -> /about-us.php)
$cleanPath = __DIR__ . $uri . '.php';
if (file_exists($cleanPath)) {
    include $cleanPath;
    return true;
}

// Fallback to index or 404
http_response_code(404);
echo "404 Not Found";
return true;
