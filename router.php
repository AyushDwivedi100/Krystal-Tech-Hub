<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requested = __DIR__ . $uri;

// Check if this is an AJAX request
$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
          strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

// Check if request is from fetch API (no redirect for internal fetches)
$isFetch = isset($_SERVER['HTTP_SEC_FETCH_MODE']) && $_SERVER['HTTP_SEC_FETCH_MODE'] === 'cors';

// Handle static files (images, css, js, etc.)
if ($uri !== '/' && file_exists($requested) && !is_dir($requested)) {
    $extension = pathinfo($requested, PATHINFO_EXTENSION);
    // Let PHP serve static files directly
    if (in_array($extension, ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico', 'webp', 'woff', 'woff2', 'ttf', 'eot', 'webmanifest'])) {
        return false;
    }
}

// Handle root URL
if ($uri === '/') {
    include __DIR__ . '/index.php';
    return true;
}

// Handle .php URLs - serve directly for AJAX/fetch, redirect for regular requests
if (preg_match('/\.php$/', $uri)) {
    $phpFile = __DIR__ . $uri;
    if (file_exists($phpFile)) {
        // Serve directly for AJAX/fetch requests
        if ($isAjax || $isFetch) {
            include $phpFile;
            return true;
        }
        // Redirect to clean URL for regular browser requests
        $cleanUrl = preg_replace('/\.php$/', '', $uri);
        header("Location: $cleanUrl", true, 301);
        exit;
    }
}

// Redirect .html URLs to clean URLs (SEO friendly)
if (preg_match('/\.html$/', $uri)) {
    $cleanUrl = preg_replace('/\.html$/', '', $uri);
    header("Location: $cleanUrl", true, 301);
    exit;
}

// Handle clean URLs (e.g., /about -> about.php)
$phpFile = __DIR__ . $uri . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    return true;
}

// Handle directories
if (is_dir($requested)) {
    if (file_exists($requested . '/index.php')) {
        include $requested . '/index.php';
        return true;
    }
}

// 404 for everything else
http_response_code(404);
include __DIR__ . '/404.php';
return true;
