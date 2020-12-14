<?php

declare(strict_types=1);

namespace Maikel\Learn\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    /**
     * @var PageFactory
     */
    protected  $_pageFactory;

    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
    }

    public function execute(): \Magento\Framework\View\Result\Page
    {
        return $this->_pageFactory->create();
    }
}
