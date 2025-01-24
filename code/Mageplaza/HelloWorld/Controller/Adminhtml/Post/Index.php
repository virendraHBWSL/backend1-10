<?php

namespace Mageplaza\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory; // Properly assign the dependency
    }

    public function execute()
{
    // $resultPage = $this->resultPageFactory->create();
    // $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
    echo "Controller is working!";
    exit;
    // return $resultPage;
}

}
