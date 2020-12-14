<?php

declare(strict_types=1);

namespace Maikel\Learn\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{

    public function getName(): String
    {
        return 'Maikel';
    }

}
