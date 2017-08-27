<?php

// Create controller.
$controller = $app['controllers_factory'];

// Homepage
$controller->get('/', function () use ($app) {
    return $app['twig']->render('main/index.html.twig', []);
})->bind('homepage');

// Mount controller.
$app->mount('/', $controller);