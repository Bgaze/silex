<?php

use Symfony\Component\Debug\Debug;

// Constants.
define('ROOT', __DIR__ . '/..');

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
if (isset($_SERVER['HTTP_CLIENT_IP']) || isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', 'fe80::1', '::1'])) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check ' . basename(__FILE__) . ' for more information.');
}

// Load dependencies.
require_once ROOT . '/vendor/autoload.php';

// Enable debugging.
Debug::enable();

// Run application.
$app = require ROOT . '/src/app.php';
$app->run();
