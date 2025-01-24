<?php

namespace Virendra\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    // protected $resultPageFactory;

    // public function __construct(
    //     Action\Context $context,
    //     PageFactory $resultPageFactory
    // )
    // {
    //     parent::__construct($context);
    //     $this->resultPageFactory = $resultPageFactory;
    // }

    public function execute()
    {
        // $resultPage = $this->resultPageFactory->create();
        echo "hello from virendra". PHP_EOL;
        // $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
        // return $resultPage;
    }
}
