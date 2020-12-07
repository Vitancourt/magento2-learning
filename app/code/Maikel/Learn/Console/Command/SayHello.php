<?php

declare(strict_types=1);

namespace Maikel\Learn\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class SayHello
 */
class SayHello extends Command
{

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('say:hello');
        $this->setDescription('This is my sample command.');

        parent::configure();

        return $this;
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return SayHello
     */
    protected function execute(InputInterface $input, OutputInterface $output): SayHello
    {
        $output->writeln('<info>Hello.</info>');
        $output->writeln('<error>Hello.</error>');
        $output->writeln('<comment>Hello.</comment>');

        return $this;
    }
}