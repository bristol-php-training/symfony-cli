<?php


namespace BristolPhpTraining\cli\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    protected function configure()
    {
        $this->setName('say:hello');
        $this->setDescription("Says hello");
        $this->addArgument('first', InputArgument::REQUIRED, 'First anme');
        $this->addArgument('last', InputArgument::REQUIRED, 'Last anme');
        $this->addOption('compliment', 'c', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_REQUIRED, 'Add a compliment');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $firstName = $input->getArgument('first');
        $lastName = $input->getArgument('last');
        $message = "Hello {$firstName} {$lastName}.";
        if ($input->getOption('compliment')) {
            $message .= ' Here are some nice things about you: ' . join(", ", $input->getOption('compliment'));
        }
        $output->writeln($message);
    }

}