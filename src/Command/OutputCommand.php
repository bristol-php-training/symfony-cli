<?php

namespace BristolPhpTraining\cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OutputCommand extends Command
{
    protected function configure()
    {
        $this->setName('output:colours');
        $this->setDescription('Shows different colours');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Info</info>');
        $output->writeln('<comment>comment</comment>');
        $output->writeln('<question>question</question>');
        $output->writeln('<error>error</error>');
        $output->writeln('<fg=black;bg=yellow;options=bold,blink>Custom</>');


        $style = new OutputFormatterStyle('black', 'yellow', ['bold', 'blink']);
        $output->getFormatter()->setStyle('annoying', $style);
        $output->writeln('<annoying>annoying</annoying>');
    }
}