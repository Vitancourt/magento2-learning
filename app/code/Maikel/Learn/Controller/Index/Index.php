<?php

declare(strict_types=1);

namespace Maikel\Learn\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{

    /** @var Magento\Framework\App\Action\Context */
    protected $_context;

    /** @var Magento\Framework\View\Result\PageFactory */
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
        $this->_context = $context;
		$this->_pageFactory = $pageFactory;
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}
