<?php


namespace BristolPhpTraining\cli\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    protected function configure()
    {
        $this->setName('say:hello');
        $this->setDescription("Says hello");
        $this->addArgument('name', InputArgument::REQUIRED,'Name of person to say hello to');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln("Hello {$name}");
    }


}