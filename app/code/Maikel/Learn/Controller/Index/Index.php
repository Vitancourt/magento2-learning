<?php

declare(strict_types=1);

namespace Maikel\Learn\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\App\Action\Context $_context;

    protected \Magento\Framework\View\Result\PageFactory $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_context = $context;
        $this->_pageFactory = $pageFactory;
    }

    public function execute(): \Magento\Framework\View\Result\Page
    {
        return $this->_pageFactory->create();
    }
}
