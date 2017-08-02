<?php

namespace BristolPhpTraining\cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class QuestionCommand extends Command
{
    protected function configure()
    {
        $this->setName('question:free-text');
        $this->setDescription('Ask a normal question');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var QuestionHelper $helper */
        $helper = $this->getHelper('question');

        $question = new Question("What's your name? ");

        $answer = $helper->ask($input, $output, $question);

        $output->writeln("Hello $answer");
    }
}