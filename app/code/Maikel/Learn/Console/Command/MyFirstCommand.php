<?php

declare(strict_types=1);

namespace Maikel\Learn\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MyFirstCommand
 */
class MyFirstCommand extends Command
{
    const NAME = 'name';

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('my:first:command');
        $this->setDescription('This is my first console command.');
        $this->addOption(
            self::NAME,
            null,
            InputOption::VALUE_REQUIRED,
            'Name'
        );

        parent::configure();

        return $this;
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return MyFirstCommand
     */
    protected function execute(InputInterface $input, OutputInterface $output): MyFirstCommand
    {
        if ($name = $input->getOption(self::NAME)) {
            $output->writeln('<info>Provided name is `' . $name . '`</info>');
        }

        $output->writeln('<info>Success Message.</info>');
        $output->writeln('<error>An error encountered.</error>');
        $output->writeln('<comment>Some Comment.</comment>');

        return $this;
    }
}