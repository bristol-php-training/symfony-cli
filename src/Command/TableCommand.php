<?php

namespace BristolPhpTraining\cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TableCommand extends Command
{
    protected function configure()
    {
        $this->setName('output:table');
        $this->setDescription('Shows tables');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);
        $table->setHeaders(['Name', 'Age']);
        $table->addRows([
            ['John', 25],
            ['Alice', 42],
            ['Jack', 55],
            ['Sarah', 38],
        ]);

        $table->render();
    }
}