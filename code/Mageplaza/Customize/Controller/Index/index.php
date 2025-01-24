<?php
namespace Mageplaza\Customize\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    private readonly PageFactory $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute(): ResultInterface
    {
        return $this->pageFactory->create();
    }
}
