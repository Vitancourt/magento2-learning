<?php

declare(strict_types=1);

namespace Maikel\Learn\Controller\Foward;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;

class Index implements HttpGetActionInterface
{

    /**
     * @var ForwardFactory
     */
    private $forwardFactory;

    /**
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(
        ForwardFactory $forwardFactory
    ) {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        /** @var Forward $forward */
        $forward = $this->forwardFactory->create();
        return $forward->forward('defaultNoRoute');
    }

}