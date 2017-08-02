<?php

namespace BristolPhpTraining\cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class ConfirmationCommand extends Command
{
    protected function configure()
    {
        $this->setName('question:confirmation');
        $this->setDescription('Ask confirmation question');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var QuestionHelper $helper */
        $helper = $this->getHelper('question');

        $question = new ConfirmationQuestion("Do you like PHP? ", false);

        $answer = $helper->ask($input, $output, $question);

        if ($answer) {
            $output->writeln("Correct answer");
        } else {
            $output->writeln("WHAT??!!?");
        }
    }
}