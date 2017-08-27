<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

// Constants.
foreach (['ROOT' => __DIR__ . '/..', 'CLI' => false, 'ENV' => 'dev'] as $k => $v) {
    if (!defined($k)) {
        define($k, $v);
    }
}

// Create application.
$app = new Application();

// Register services.
require_once ROOT . '/src/services.php';

// Load config.
require_once ROOT . '/src/config/' . ENV . '.php';

// Manage errors.
$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug'] || CLI) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = [
        'errors/' . $code . '.html.twig',
        'errors/' . substr($code, 0, 2) . 'x.html.twig',
        'errors/' . substr($code, 0, 1) . 'xx.html.twig',
        'errors/default.html.twig',
    ];

    return new Response($app['twig']->resolveTemplate($templates)->render(['code' => $code]), $code);
});

// If not in console mode, load controllers.
if (!CLI) {
    $app['finder']->in(ROOT . '/src/controllers')->files()->name('*.php')->sortByName();
    foreach ($app['finder'] as $file) {
        require_once $file->getRealPath();
    }
}

// Return app.
return $app;
