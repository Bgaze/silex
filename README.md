# Silex Skeleton

Welcome to the Silex Skeleton - a fully-functional Silex application that you
can use as the starting point for your Silex applications.

A great way to start learning Silex is via the [Documentation][Documentation], which will
take you through all the features of Silex.

This document contains information on how to start using the Silex Skeleton.

## Get the project & install vendors

    $ git clone https://github.com/bgaze/silex-skeleton.git path/to/install
    $ cd path/to/install
    $ composer install

## Browsing the Demo Application

To configure Silex on your local webserver, see [Webserver configuration documentation][Webserver].

To use the PHP built-in web server run :

    $ COMPOSER_PROCESS_TIMEOUT=0 composer run

Then, browse to http://localhost:8888/index_dev.php/

## Included service providers.

Read the [Providers][Providers] documentation for more details about Silex Service Providers.

The Silex Skeleton is configured with the following service providers:

* [ValidatorServiceProvider][ValidatorServiceProvider] : Provides a service for validating data. It is
  most useful when used with the FormServiceProvider, but can also be used
  standalone.
* [ServiceControllerServiceProvider][ServiceControllerServiceProvider] - As your Silex application grows, you
  may wish to begin organizing your controllers in a more formal fashion.
  Silex can use controller classes out of the box, but with a bit of work,
  your controllers can be created as services, giving you the full power of
  dependency injection and lazy loading.
* [TwigServiceProvider][TwigServiceProvider] - Provides integration with the Twig template engine.
* [WebProfilerServiceProvider][WebProfilerServiceProvider] - Enable the Symfony web debug toolbar and
  the Symfony profiler in your Silex application when developing.
* [MonologServiceProvider][MonologServiceProvider] - Enable logging in the development environment.
* [Finder][Finder] - Find files and directories via an intuitive fluent interface.

[Webserver]: https://silex.symfony.com/doc/2.0/web_servers.html
[Documentation]: http://silex.sensiolabs.org/documentation
[ValidatorServiceProvider]: http://silex.sensiolabs.org/doc/master/providers/validator.html
[ServiceControllerServiceProvider]: http://silex.sensiolabs.org/doc/master/providers/service_controller.html
[TwigServiceProvider]: http://silex.sensiolabs.org/doc/master/providers/twig.html
[WebProfilerServiceProvider]: http://github.com/silexphp/Silex-WebProfiler
[MonologServiceProvider]: http://silex.sensiolabs.org/doc/master/providers/monolog.html
[Providers]: http://silex.sensiolabs.org/doc/providers.html
[Finder]: https://symfony.com/doc/current/components/finder.html