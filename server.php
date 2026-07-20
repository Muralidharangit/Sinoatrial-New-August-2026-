<?php

$publicPath = getcwd();

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// CSS Minification function
function minifyCSS($css) {
    // Remove comments
    $css = preg_replace('!/\*[^*]*\*+([^/*][^*]*\*+)*/!', '', $css);
    // Remove space after colons
    $css = str_replace(': ', ':', $css);
    // Remove whitespace / line breaks
    $css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    '), '', $css);
    // Remove unnecessary spaces around braces, semicolons, and commas
    $css = preg_replace('/\s*([\{\};,])\s*/', '$1', $css);
    // Remove trailing semicolons in blocks
    $css = str_replace(';}', '}', $css);
    return trim($css);
}

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists($publicPath.$uri)) {
    // Determine the file extension
    $extension = strtolower(pathinfo($uri, PATHINFO_EXTENSION));
    
    // Map extensions to mime types
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'webp' => 'image/webp',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'otf' => 'font/otf',
        'eot' => 'application/vnd.ms-fontobject',
        'pdf' => 'application/pdf',
        'html' => 'text/html',
        'htm' => 'text/html',
        'txt' => 'text/plain',
        'xml' => 'application/xml',
        'json' => 'application/json',
    ];
    
    if (isset($mimeTypes[$extension])) {
        // Set Cache-Control header for efficient cache lifetime (1 year)
        header("Cache-Control: public, max-age=31536000, immutable");
        header("Content-Type: " . $mimeTypes[$extension]);
        
        // Read file content
        $content = file_get_contents($publicPath.$uri);
        
        // Minify CSS if not already minified
        if ($extension === 'css' && strpos($uri, '.min.css') === false) {
            $content = minifyCSS($content);
        }
        
        // Compress text-based assets with gzip if the client supports it
        $compressibleTypes = ['css', 'js', 'svg', 'html', 'htm', 'txt', 'xml', 'json', 'woff', 'woff2', 'ttf', 'otf', 'eot'];
        if (in_array($extension, $compressibleTypes) && isset($_SERVER['HTTP_ACCEPT_ENCODING']) && strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false) {
            $compressedContent = gzencode($content, 9);
            header("Content-Encoding: gzip");
            header("Content-Length: " . strlen($compressedContent));
            echo $compressedContent;
        } else {
            header("Content-Length: " . strlen($content));
            echo $content;
        }
        exit;
    }
    
    return false;
}

$formattedDateTime = date('D M j H:i:s Y');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$remoteAddress = $_SERVER['REMOTE_ADDR'].':'.$_SERVER['REMOTE_PORT'];

file_put_contents('php://stdout', "[$formattedDateTime] $remoteAddress [$requestMethod] URI: $uri\n");

require_once $publicPath.'/index.php';
