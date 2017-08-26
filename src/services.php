<?php

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Symfony\Component\Finder\Finder;
use Silex\Provider\AssetServiceProvider;

// Controllers.
$app->register(new ServiceControllerServiceProvider());

// Assets.
$app->register(new AssetServiceProvider());

// Http fragments.
$app->register(new HttpFragmentServiceProvider());

// Twig.
$app->register(new TwigServiceProvider());
$app['twig.path'] = array(ROOT . '/src/views');
$app['twig.options'] = array('cache' => ROOT . '/var/cache/twig');
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

// Finder.
$app['finder'] = function () {
    return new Finder();
};
