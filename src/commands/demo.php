<?php

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Bgaze\Silex\Console\Command\AbstractCommand;

// Build the command.

class DemoCommand extends AbstractCommand {

    public function isEnabled() {
        /* Do custom tests before enabling command if you want
          if (!isset($this->app['my_value'])) {
          return false;
          }
         */
        return parent::isEnabled();
    }

    protected function configure() {
        $this
                ->setName('demo:command')
                ->setDefinition([
                    new InputArgument('foo', InputArgument::REQUIRED, 'A required argument'),
                    new InputOption('bar', 'b', InputOption::VALUE_REQUIRED, 'An option with default value', 'Bar!')
                ])
                ->setDescription('This is a demo command ...');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $foo = $input->getArgument('foo');
        $output->writeln('Foo : ' . $foo);

        $bar = $input->getOption('bar');
        $output->writeln('Bar : ' . $bar);
    }

}

// Then register it.

$app['console']->add(new DemoCommand());
