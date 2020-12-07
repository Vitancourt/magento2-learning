<?php

declare(strict_types=1);

namespace Maikel\Learn\Cron;

class Test
{

	public function execute()
	{
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info(__METHOD__);

		return $this;


	}
}