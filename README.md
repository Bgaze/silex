# Silex Skeleton

Welcome to the Silex Skeleton - a fully-functional Silex application that you
can use as the starting point for your Silex applications.

A great way to start learning Silex is via the [Documentation][1], which will
take you through all the features of Silex.

This document contains information on how to start using the Silex Skeleton.

## Install.

    $ composer create-project bgaze/silex-skeleton:dev-master path/to/install

Then give to PHP write permissions on `/var` directory (for logs and cache).

## Browsing the Demo Application

To configure Silex on your local webserver, see [Webserver configuration documentation][2].

To use the PHP built-in web server run :

    $ cd path/to/install
    $ COMPOSER_PROCESS_TIMEOUT=0 composer run

Then, browse to http://localhost:8888/index_dev.php/

## Included service providers.

Read the [Providers][3] documentation for more details about Silex Service Providers.

The Silex Skeleton is configured with the following service providers:

* [ValidatorServiceProvider][4] : Provides a service for validating data. It is
  most useful when used with the FormServiceProvider, but can also be used
  standalone.
* [ServiceControllerServiceProvider][5] - As your Silex application grows, you
  may wish to begin organizing your controllers in a more formal fashion.
  Silex can use controller classes out of the box, but with a bit of work,
  your controllers can be created as services, giving you the full power of
  dependency injection and lazy loading.
* [TwigServiceProvider][6] - Provides integration with the Twig template engine.
* [WebProfilerServiceProvider][7] - Enable the Symfony web debug toolbar and
  the Symfony profiler in your Silex application when developing.
* [MonologServiceProvider][8] - Enable logging in the development environment.
* [FinderServiceProvider][9] - Find files and directories via an intuitive fluent interface.
* [ConsoleServiceProvider][10] - A CLI application service provider for Silex.

## Usage.

This Silex implementation follows several convention.  
Mainly, currently modified files should reside into `/src` folder.

Please find in this section more details about the organisation.

### Views.

Application views reside into `/src/views` folder. 

Two templates are included :

* `base.html.twig` : a raw base template defining main blocks in a HTML page.
* `layout.html.twig` : an implementation of [Bootstrap 4 Stater Template][11].  
It can be used to quick start your app, and as a pattern to build your own layout.

### Console

#### Usage.

Console executable is `/bin/console` file :

    $ php bin/console your:command

To get a list of available commands, just call it with no arguments :

    $ php bin/console

This implementation is shipped with two commands :

* `cache:clear` : erases application cache.  
Run this command to see your changes into PROD environment.
* `demo:command` : a pattern for your custom commands.

> If you don't need to build custom commands, you can safely remove `/src/commands` folder. 

#### Custom commands.

**Documentation :** [ConsoleServiceProvider][10], [Symfony Console Component][12].

Custom commands reside into `/src/commands` folder.  
Any PHP file in this folder is automatically loaded when console is invoked.

Basically, to create a command :

* Store your command into `/src/commands`.
* Make it extend `Bgaze\Silex\Console\Command\AbstractCommand`.
* Register it right after the class.

Please see `/src/commands/demo.php` for an example :  

    <?php
    # src/commands/mycommand.php
    
    use Bgaze\Silex\Console\Command\AbstractCommand;

    class MyCommand extends AbstractCommand {

        // ...

    }

    $app['console']->add(new DemoCommand());





[1]: http://silex.sensiolabs.org/documentation
[2]: https://silex.symfony.com/doc/2.0/web_servers.html
[3]: http://silex.sensiolabs.org/doc/providers.html
[4]: http://silex.sensiolabs.org/doc/master/providers/validator.html
[5]: http://silex.sensiolabs.org/doc/master/providers/service_controller.html
[6]: http://silex.sensiolabs.org/doc/master/providers/twig.html
[7]: http://github.com/silexphp/Silex-WebProfiler
[8]: http://silex.sensiolabs.org/doc/master/providers/monolog.html
[9]: https://github.com/bgaze/silex-finder-provider
[10]: https://github.com/bgaze/silex-console-provider
[11]: https://v4-alpha.getbootstrap.com/examples/starter-template/
[12]: http://symfony.com/doc/current/components/console/introduction.html
