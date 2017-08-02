<?php

namespace BristolPhpTraining\cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProgressCommand extends Command
{
    protected function configure()
    {
        $this->setName('output:progress');
        $this->setDescription('Shows progress');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $progressBar = new ProgressBar($output, 10);
        $progressBar->setBarCharacter('<fg=magenta>=</>');
        $progressBar->setProgressCharacter("\xF0\x9F\x8D\xBA");

        for($i=0; $i<10; $i++) {
            sleep(rand(1, 3));
            $progressBar->advance();
        }
        $progressBar->finish();
    }
}